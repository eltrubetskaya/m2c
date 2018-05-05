define([
    'jquery',
    'uiComponent',
    'ko'
], function ($, Component, ko) {
    'use strict';

    return Component.expand({
        default: {
            template: 'Training_ModuleUi/content/component'
        },
        canBeDisplayed: ko.observable(0),
        clickShowHide: function () {
            // this.canBeDisplayed = !this.canBeDisplayed //as regular variant
            this.canBeDisplayed(!this.canBeDisplayed()) //as observable
        }
    })
})
