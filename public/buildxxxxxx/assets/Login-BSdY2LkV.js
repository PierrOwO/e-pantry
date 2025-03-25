import{h as x,i as v,v as _,f as b,o as d,C as h,c,w as m,a,g as f,b as r,u as t,m as V,t as B,d as C,P,e as p,n as $}from"./app-F88UbqF5.js";import{_ as q}from"./GuestLayout-D6rq1RiP.js";import{_ as g,a as k,b as y}from"./TextInput-D_js5h79.js";import{P as N}from"./PrimaryButton-VlbMzTLf.js";import"./ApplicationLogo-BFTCsGdz.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const U=["value"],L={__name:"Checkbox",props:{checked:{type:[Array,Boolean],required:!0},value:{default:null}},emits:["update:checked"],setup(l,{emit:s}){const n=s,i=l,e=x({get(){return i.checked},set(o){n("update:checked",o)}});return(o,u)=>v((d(),b("input",{type:"checkbox",value:l.value,"onUpdate:modelValue":u[0]||(u[0]=w=>e.value=w),class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"},null,8,U)),[[_,e.value]])}},R={key:0,class:"mb-4 text-sm font-medium text-green-600"},S={class:"mt-4"},D={class:"mt-4 block"},E={class:"flex items-center"},F={class:"mt-4 flex items-center justify-end"},H={__name:"Login",props:{canResetPassword:{type:Boolean},status:{type:String}},setup(l){const s=h({email:"",password:"",remember:!1}),n=()=>{s.post(route("login"),{onFinish:()=>s.reset("password")})};return(i,e)=>(d(),c(q,null,{default:m(()=>[a(t(V),{title:"Log in"}),l.status?(d(),b("div",R,B(l.status),1)):f("",!0),r("form",{onSubmit:C(n,["prevent"])},[r("div",null,[a(g,{for:"email",value:"Email"}),a(k,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:t(s).email,"onUpdate:modelValue":e[0]||(e[0]=o=>t(s).email=o),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),a(y,{class:"mt-2",message:t(s).errors.email},null,8,["message"])]),r("div",S,[a(g,{for:"password",value:"Password"}),a(k,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:t(s).password,"onUpdate:modelValue":e[1]||(e[1]=o=>t(s).password=o),required:"",autocomplete:"current-password"},null,8,["modelValue"]),a(y,{class:"mt-2",message:t(s).errors.password},null,8,["message"])]),r("div",D,[r("label",E,[a(L,{name:"remember",checked:t(s).remember,"onUpdate:checked":e[2]||(e[2]=o=>t(s).remember=o)},null,8,["checked"]),e[3]||(e[3]=r("span",{class:"ms-2 text-sm text-gray-600 dark:text-gray-400"},"Remember me",-1))])]),r("div",F,[l.canResetPassword?(d(),c(t(P),{key:0,href:i.route("password.request"),class:"rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"},{default:m(()=>e[4]||(e[4]=[p(" Forgot your password? ")])),_:1},8,["href"])):f("",!0),a(N,{class:$(["ms-4",{"opacity-25":t(s).processing}]),disabled:t(s).processing},{default:m(()=>e[5]||(e[5]=[p(" Log in ")])),_:1},8,["class","disabled"])])],32)]),_:1}))}};export{H as default};
