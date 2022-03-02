import TranslationService from "../services/TranslationService";
import Vue from "vue";

Vue.filter("ageRestriction", age =>
{
    if (age === 0)
    {
        return TranslationService.translate("Frontend::Template.singleItemAgeRestrictionNone");
    }
    else if (age > 0 && age <= 18)
    {
        return TranslationService.translate("Frontend::Template.singleItemAgeRestriction", { age });
    }
    else if (age === 50)
    {
        return TranslationService.translate("Frontend::Template.singleItemAgeRestrictionNotFlagged");
    }
    else if (age === 88)
    {
        return TranslationService.translate("Frontend::Template.singleItemAgeRestrictionNotRequired");
    }
    else
    {
        return TranslationService.translate("Frontend::Template.singleItemAgeRestrictionUnknown");
    }
});
