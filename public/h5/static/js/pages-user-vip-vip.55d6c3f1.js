(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-user-vip-vip"],{5623:function(e,t,i){"use strict";i.r(t);var a=i("acfb"),n=i("7046");for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);i("cb7e");var c=i("2877"),r=Object(c["a"])(n["default"],a["a"],a["b"],!1,null,"6506a110",null);t["default"]=r.exports},"6bcb":function(e,t,i){var a=i("a036");"string"===typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);var n=i("4f06").default;n("7ec469eb",a,!0,{sourceMap:!1,shadowMode:!1})},7046:function(e,t,i){"use strict";i.r(t);var a=i("b5c2"),n=i.n(a);for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);t["default"]=n.a},"878f":function(e,t,i){"use strict";var a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"content"},[i("v-uni-view",{staticClass:"vip_bg",staticStyle:{background:"url(../../../static/vip_bg.png)","background-size":"100% 100%"}},[i("v-uni-view",{staticClass:"vip_nickname"},[e._v(e._s(e.vipInfo.nickname))]),i("v-uni-view",{staticClass:"vip_time"},[e._v(e._s(e.vipInfo.viptime))])],1),i("v-uni-view",{staticClass:"vip_title"},[e._v("VIP会员资费")]),i("v-uni-view",{staticClass:"uni-flex uni-row pd10"},e._l(e.vipInfo.vipmoney,function(t,a){return i("v-uni-view",{key:a,staticClass:"text vip-money",class:e.vipMoney==a?"active":"",on:{click:function(t){t=e.$handleEvent(t),e.onClickNum(a)}}},[i("v-uni-view",{staticClass:"vip-money-title"},[e._v(e._s(t.title))]),i("v-uni-view",{staticClass:"vip-money-val"},[e._v("￥"),i("v-uni-text",[e._v(e._s(t.val))])],1),i("v-uni-view",{staticClass:"vip-money-gqval"},[e._v("￥"+e._s(t.gqval))])],1)})),i("v-uni-view",{staticClass:"pd30"},[i("v-uni-view",{staticClass:"uni-card by-card"},[i("v-uni-view",{staticClass:"uni-card-content p15"},[i("v-uni-view",{staticClass:"tq-title"},[e._v("会员的特权")]),i("v-uni-view",{staticClass:"linebg"}),i("v-uni-view",{staticClass:"tq-center"},[i("v-uni-rich-text",{attrs:{nodes:e.vipInfo.viptq}})],1)],1)],1)],1),i("v-uni-view",[i("uni-segmented-control",{attrs:{current:e.current,values:e.items,styleType:e.styleType,activeColor:e.activeColor},on:{clickItem:function(t){t=e.$handleEvent(t),e.onClickItem(t)}}})],1),i("v-uni-view",{staticClass:"content"},[i("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:1===e.current,expression:"current === 1"}],staticClass:"uni-padding-wrap"},[i("v-uni-view",{staticClass:"alipay"},[i("img",{attrs:{src:e.vipInfo.alipay}})])],1),i("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:0===e.current,expression:"current === 0"}],staticClass:"uni-padding-wrap"},[i("v-uni-view",{staticClass:"weixin"},[i("img",{attrs:{src:e.vipInfo.weixin}}),i("v-uni-view",[e._v("长按二维码选择识别图中二维码")])],1)],1)],1),i("v-uni-view",{staticClass:"pd30"},[i("v-uni-view",{staticClass:"uni-card by-card"},[i("v-uni-view",{staticClass:"uni-card-content p15"},[i("v-uni-view",{staticClass:"tq-title"},[e._v("支付方法")]),i("v-uni-view",{staticClass:"linebg"}),i("v-uni-view",{staticClass:"tq-center font-sg"},[i("v-uni-rich-text",{attrs:{nodes:e.vipInfo.vippayff}})],1)],1)],1)],1),i("v-uni-view",{staticClass:"tip_btn pd30"},[i("v-uni-text",[e._v("*")]),e._v("如有疑问可咨询客服人员。")],1)],1)},n=[];i.d(t,"a",function(){return a}),i.d(t,"b",function(){return n})},a036:function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,"uni-page-body[data-v-fee6c9ca]{height:auto;min-height:100%;background-color:#f7f8fa}.vip_bg[data-v-fee6c9ca]{height:%?176?%;padding-top:%?54?%}.vip_nickname[data-v-fee6c9ca]{color:#d0be9a;margin-left:%?180?%;font-size:%?38?%}.vip_time[data-v-fee6c9ca]{color:#b3a696;margin-left:%?184?%;font-size:%?24?%}.vip_title[data-v-fee6c9ca]{padding:%?20?%;font-size:%?34?%;font-weight:800}.pd10[data-v-fee6c9ca]{padding:%?0?% %?10?%}.vip-money[data-v-fee6c9ca]{border:%?4?% solid #ebebeb;border-radius:%?12?%;margin:%?0?% %?10?%;-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%?200?%;padding:%?20?% %?0?% %?20?% %?50?%}.vip-money.active[data-v-fee6c9ca]{border:%?4?% solid #3e3e3e;background-color:#3e3e3e}.vip-money-title[data-v-fee6c9ca]{color:#7b7b7b;font-size:%?32?%;font-weight:800}.vip-money-val[data-v-fee6c9ca]{color:#6c6c6c;font-size:%?28?%;font-weight:500}.vip-money-val uni-text[data-v-fee6c9ca]{color:#6c6c6c;font-size:%?44?%;font-weight:800}.vip-money-gqval[data-v-fee6c9ca]{color:silver;font-size:%?28?%;font-weight:400;text-decoration:line-through}.vip-money.active .vip-money-title[data-v-fee6c9ca]{color:#d2ba8c}.vip-money.active .vip-money-val[data-v-fee6c9ca]{color:#d6b580}.vip-money.active .vip-money-val uni-text[data-v-fee6c9ca]{color:#d6b580}.vip-money.active .vip-money-gqval[data-v-fee6c9ca]{color:#969696}.uni-card.by-card[data-v-fee6c9ca]{border-radius:%?12?%;-webkit-box-shadow:%?4?% %?4?% %?20?% %?4?% hsla(0,0%,48.2%,.3);box-shadow:%?4?% %?4?% %?20?% %?4?% hsla(0,0%,48.2%,.3)}.uni-card.by-card .p15[data-v-fee6c9ca]{padding:%?0?% %?16?%}.pd30[data-v-fee6c9ca]{padding:%?30?% %?20?%}.tq-title[data-v-fee6c9ca]{text-align:center;line-height:%?120?%;font-size:%?36?%;color:#d78603}.linebg[data-v-fee6c9ca]{margin:%?30?% %?0?%;height:%?4?%;background-color:#ebebeb;width:90%;margin:%?0?% auto}.tq-center[data-v-fee6c9ca]{padding:%?30?% %?50?%}.alipay[data-v-fee6c9ca]{text-align:center;padding:%?40?%;height:%?619?%}.alipay uni-image[data-v-fee6c9ca]{width:%?444?%;height:%?619?%}.alipay img[data-v-fee6c9ca]{width:%?444?%;height:%?619?%}.weixin[data-v-fee6c9ca]{text-align:center;padding:%?40?%;height:%?619?%}.weixin uni-image[data-v-fee6c9ca]{width:%?444?%;height:%?537?%}.weixin img[data-v-fee6c9ca]{width:%?444?%;height:%?537?%}.font-sg[data-v-fee6c9ca]{font-weight:400;font-family:pingfangxi}.red-text[data-v-fee6c9ca]{color:#fe5950}.tip_btn[data-v-fee6c9ca]{color:#cdd1dd;text-align:center}.tip_btn uni-text[data-v-fee6c9ca]{color:#fd5950}body.?%PAGE?%[data-v-fee6c9ca]{background-color:#f7f8fa}",""])},acfb:function(e,t,i){"use strict";var a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"segmented-control"},e._l(e.values,function(t,a){return i("v-uni-view",{key:a,staticClass:"segmented-control-item",class:e.styleType,style:a===e.currentIndex?e.activeStyle:e.itemStyle,on:{click:function(t){t=e.$handleEvent(t),e.onClick(a)}}},[e._v(e._s(t))])}))},n=[];i.d(t,"a",function(){return a}),i.d(t,"b",function(){return n})},ade8:function(e,t,i){"use strict";i.r(t);var a=i("e51d"),n=i.n(a);for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);t["default"]=n.a},b5c2:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a={name:"segmented-control",props:{current:{type:Number,default:0},values:{type:Array,default:function(){return[]}},activeColor:{type:String,default:"#007aff"},styleType:{type:String,default:"button"}},data:function(){return{currentIndex:this.current}},watch:{current:function(e){e!==this.currentIndex&&(this.currentIndex=e)}},computed:{wrapStyle:function(){var e="";switch(this.styleType){case"text":e="border:0;";break;default:e="border-color: ".concat(this.activeColor);break}return e},itemStyle:function(){var e="";switch(this.styleType){case"text":e="color:#000;border-left:0;";break;default:e="color:".concat(this.activeColor,";border-color:").concat(this.activeColor,";");break}return e},activeStyle:function(){var e="";switch(this.styleType){case"text":e="color:".concat(this.activeColor,";border-left:0;border-bottom-style:solid;");break;default:e="color:#fff;border-color:".concat(this.activeColor,";background-color:").concat(this.activeColor);break}return e}},methods:{onClick:function(e){this.currentIndex!==e&&(this.currentIndex=e,this.$emit("clickItem",e))}}};t.default=a},bab1:function(e,t,i){"use strict";i.r(t);var a=i("878f"),n=i("ade8");for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);i("e305");var c=i("2877"),r=Object(c["a"])(n["default"],a["a"],a["b"],!1,null,"fee6c9ca",null);t["default"]=r.exports},c5a8:function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,".segmented-control[data-v-6506a110]{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;width:100%;font-size:%?32?%;border-radius:%?0?%;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0 auto;overflow:hidden;border-bottom:%?2?% solid #eee;padding:%?0?% %?50?%}.segmented-control.button[data-v-6506a110]{border:%?2?% solid}.segmented-control.text[data-v-6506a110]{border:0;border-radius:%?0?%}.segmented-control-item[data-v-6506a110]{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;text-align:center;line-height:%?120?%;-webkit-box-sizing:border-box;box-sizing:border-box;font-size:%?32?%;font-weight:500}.segmented-control-item.button[data-v-6506a110]{border-left:%?1?% solid}.segmented-control-item.text[data-v-6506a110]{border-left:0}.segmented-control-item[data-v-6506a110]:first-child{border-left-width:0}",""])},c7be:function(e,t,i){var a=i("c5a8");"string"===typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);var n=i("4f06").default;n("7daab88d",a,!0,{sourceMap:!1,shadowMode:!1})},cb7e:function(e,t,i){"use strict";var a=i("c7be"),n=i.n(a);n.a},e305:function(e,t,i){"use strict";var a=i("6bcb"),n=i.n(a);n.a},e51d:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a=n(i("5623"));function n(e){return e&&e.__esModule?e:{default:e}}var o={components:{uniSegmentedControl:a.default},data:function(){return{items:["微信支付","支付宝"],vipInfo:{nickname:"",viptime:"",viptq:"",vippayff:"第一步:长按或截图二维码图片进行保存;<br />第二步:打开支付宝或微信，点开扫一扫;<br />第三步:点右上角从相册中选择刚保存的二维码;<br />第四步:输入购买会员相应金额;<br />第五步:支付时添加备注，备注会员手机号;<br />第六步:支付完成后，等待系统充值;",vipmoney:[{title:"",val:"",gqval:""},{title:"",val:"",gqval:""},{title:"",val:"",gqval:""}],alipay:"",weixin:""},current:0,activeColor:"#fe5950",styleType:"text",vipMoney:0}},onLoad:function(){},onShow:function(){this.getVipInfo()},methods:{getVipInfo:function(){var e=this,t=this.$store.state.openid,i=this.$store.state.sessionKey;try{this.$http.post(this.websiteUrl+"/api/api/getVipInfo",{openid:t,sessionKey:i},function(t){1==t.data.code?e.vipInfo=t.data.result:uni.showModal({content:t.data.msg,showCancel:!1})})}catch(a){uni.showModal({content:"网络异常,请稍后重试...",showCancel:!1})}},onClickNum:function(e){this.vipMoney=e},onClickItem:function(e){this.current!==e&&(this.current=e)}}};t.default=o}}]);