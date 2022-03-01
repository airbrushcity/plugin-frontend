import TranslationService from "../services/TranslationService";
import Vue from "vue";

Vue.filter("itemCrossPrice", function(crossPrice, isSpecialOffer)
{
    if (isSpecialOffer)
    {
        return TranslationService.translate(
            "Frontend::Template.crossPriceSpecialOffer",
            {
                price: crossPrice
            }
        );
    }

    return TranslationService.translate(
        "Frontend::Template.crossPriceRRP",
        {
            price: crossPrice
        }
    );
});
