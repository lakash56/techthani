"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.Edit=void 0;const block_editor_1=require("@wordpress/block-editor"),components_1=require("@wordpress/components"),core_data_1=require("@wordpress/core-data"),element_1=require("@wordpress/element");function Edit({attributes:e}){const{label:t,visibility:o}=e,r=(0,block_editor_1.useBlockProps)(),[i,s]=(0,core_data_1.useEntityProp)("postType","product","catalog_visibility"),d=i===o||"hidden"===i;return(0,element_1.createElement)("div",{...r},(0,element_1.createElement)(components_1.CheckboxControl,{label:t,checked:d,onChange:function(e){if(e){if("visible"===i)return void s(o);s("hidden")}else{if("hidden"===i)return"catalog"===o?void s("search"):"search"===o?void s("catalog"):void 0;s("visible")}}}))}exports.Edit=Edit;