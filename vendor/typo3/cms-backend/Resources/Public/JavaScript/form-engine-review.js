/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import"bootstrap";import DocumentService from"@typo3/core/document-service.js";import $ from"jquery";import FormEngine from"@typo3/backend/form-engine.js";import"@typo3/backend/element/icon-element.js";import Popover from"@typo3/backend/popover.js";class FormEngineReview{constructor(){this.toggleButtonClass="t3js-toggle-review-panel",this.labelSelector=".t3js-formengine-label",this.checkForReviewableField=()=>{const e=this,t=FormEngineReview.findInvalidField(),o=document.querySelector("."+this.toggleButtonClass);if(null!==o)if(t.length>0){const i=$("<div />",{class:"list-group"});t.each((function(){const t=$(this),o=t.find("[data-formengine-validation-rules]"),n=document.createElement("a");n.classList.add("list-group-item"),n.href="#",n.textContent=t.find(e.labelSelector).text(),n.addEventListener("click",(t=>e.switchToField(t,o))),i.append(n)})),o.classList.remove("hidden"),Popover.setOptions(o,{html:!0,content:i[0]})}else o.classList.add("hidden"),Popover.hide(o)},this.switchToField=(e,t)=>{e.preventDefault(),t.parents('[id][role="tabpanel"]').each((function(){$('[aria-controls="'+$(this).attr("id")+'"]').tab("show")})),t.focus()},this.initialize()}static findInvalidField(){return $(document).find(".tab-content ."+FormEngine.Validation.errorClass)}static attachButtonToModuleHeader(e){const t=document.querySelector(".t3js-module-docheader-bar-buttons").lastElementChild.querySelector('[role="toolbar"]'),o=document.createElement("typo3-backend-icon");o.setAttribute("identifier","actions-info"),o.setAttribute("size","small");const i=document.createElement("button");i.type="button",i.classList.add("btn","btn-danger","btn-sm","hidden",e.toggleButtonClass),i.title=TYPO3.lang["buttons.reviewFailedValidationFields"],i.appendChild(o),Popover.popover(i),t.prepend(i)}initialize(){const e=this,t=$(document);DocumentService.ready().then((()=>{FormEngineReview.attachButtonToModuleHeader(e)})),t.on("t3-formengine-postfieldvalidation",this.checkForReviewableField)}}export default new FormEngineReview;