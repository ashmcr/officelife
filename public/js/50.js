(window.webpackJsonp=window.webpackJsonp||[]).push([[50],{"KHd+":function(e,t,o){"use strict";function s(e,t,o,s,n,a,i,r){var l,p="function"==typeof e?e.options:e;if(t&&(p.render=t,p.staticRenderFns=o,p._compiled=!0),s&&(p.functional=!0),a&&(p._scopeId="data-v-"+a),i?(l=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),n&&n.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(i)},p._ssrRegister=l):n&&(l=r?function(){n.call(this,this.$root.$options.shadowRoot)}:n),l)if(p.functional){p._injectStyles=l;var c=p.render;p.render=function(e,t){return l.call(t),c(e,t)}}else{var _=p.beforeCreate;p.beforeCreate=_?[].concat(_,l):[l]}return{exports:e,options:p}}o.d(t,"a",(function(){return s}))},"t/IU":function(e,t,o){"use strict";o.r(t);var s={props:{employee:{type:Object,default:null}},data:function(){return{}},methods:{navigateToUrl:function(e){window.open(e,"_blank")},employeeOrAtLeastHR:function(){return!!this.employee.user&&(this.$page.auth.employee.permission_level<=200||this.$page.auth.user.id==this.employee.user.id)}}},n=o("KHd+"),a=Object(n.a)(s,(function(){var e=this,t=e.$createElement,o=e._self._c||t;return o("div",{staticClass:"mb4 relative"},[o("span",{staticClass:"db fw5 mb2"},[e._v("\n    📍 "+e._s(e.$t("employee.location_title"))+"\n  ")]),e._v(" "),e.employee.address?o("div",{staticClass:"br3 bg-white box z-1 pa3"},[e.employee.address.employee_cover_image_url?o("img",{staticClass:"mb3 pointer",attrs:{src:e.employee.address.employee_cover_image_url,alt:e.$t("employee.location_alt_employee")},on:{click:function(t){return e.navigateToUrl(e.employee.address.openstreetmap_url)}}}):e._e(),e._v(" "),e.employeeOrAtLeastHR()?o("p",{staticClass:"mt0",attrs:{"data-cy":"employee-location"}},[e._v("\n      "+e._s(e.$t("employee.location_information",{address:e.employee.address.readable}))+"\n    ")]):e._e(),e._v(" "),e.employeeOrAtLeastHR()?e._e():o("p",{staticClass:"mt0",attrs:{"data-cy":"employee-location"}},[e._v("\n      "+e._s(e.$t("employee.location_information",{address:e.employee.address.partial}))+"\n    ")]),e._v(" "),o("span",{staticClass:"f7 silver"},[e._v("\n      "+e._s(e.$t("employee.location_privacy_information"))+"\n    ")])]):o("div",{staticClass:"br3 bg-white box z-1 pa3"},[o("p",{staticClass:"mb0 mt0 lh-copy mb0 f6"},[e._v("\n      "+e._s(e.$t("employee.location_no_info"))+"\n    ")])])])}),[],!1,null,"5e6e7b68",null);t.default=a.exports}}]);
//# sourceMappingURL=50.js.map?id=84b5732530abe94491ae