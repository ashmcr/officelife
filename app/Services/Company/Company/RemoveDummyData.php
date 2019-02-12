<?php

namespace App\Services\Company\Company;

use App\Services\BaseService;
use App\Models\Company\Company;
use App\Models\Company\Employee;
use Illuminate\Support\Facades\DB;

class RemoveDummyData extends BaseService
{
    /**
     * Get the validation rules that apply to the service.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_id' => 'required|integer|exists:companies,id',
            'author_id' => 'required|integer|exists:users,id',
        ];
    }

    /**
     * Generate dummy data for the given account.
     *
     * @param array $data
     * @return void
     */
    public function execute(array $data)
    {
        $this->validate($data);

        $author = $this->validatePermissions(
            $data['author_id'],
            $data['company_id'],
            config('homas.authorizations.administrator')
        );

        $company = Company::find($data['company_id']);

        $this->removeTeams($data);

        $this->removeEmployees($data);

        $this->removeAuditLogs($data);

        $company->has_dummy_data = false;
        $company->save();
    }

    /**
     * Remove dummy team.
     *
     * @param array $data
     * @return void
     */
    private function removeTeams(array $data)
    {
        DB::table('teams')
            ->where('company_id', $data['company_id'])
            ->where('is_dummy', true)
            ->delete();
    }

    /**
     * Remove dummy users.
     *
     * @param array $data
     * @return void
     */
    private function removeEmployees(array $data)
    {
        $employees = Employee::where('company_id', $data['company_id'])->get();

        foreach ($employees as $employee) {
            if ($employee->is_dummy) {
                $employee->delete();
            }
        }
    }

    /**
     * Remove dummy audit logs.
     *
     * @param array $data
     * @return void
     */
    private function removeAuditLogs(array $data)
    {
        DB::table('audit_logs')
            ->where('company_id', $data['company_id'])
            ->where('is_dummy', true)
            ->delete();
    }
}