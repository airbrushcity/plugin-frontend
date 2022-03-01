import TranslationService from "../../services/TranslationService";
import Vue from "vue";

export default Vue.component("order-documents", {

    props: {
        template:
        {
            type: String,
            default: "#vue-order-documents"
        },

        documents:
        {
            type: Array,
            default: () => []
        },

        type:
        {
            type: String,
            default: "order"
        },

        allowedTypesForOrders:
        {
            type: Array,
            default: () => [
                "invoice",
                "invoice_external",
                "delivery_note",
                "order_confirmation",
                "pickup_delivery",
                "reversal_document",
                "return_note"
            ]
        },

        allowedTypesForReturns:
        {
            type: Array,
            default: () => [
                "return_note"
            ]
        }
    },

    computed:
    {
        activeDocuments()
        {
            if (this.type === "order")
            {
                return this.documents.filter(document => this.allowedTypesForOrders.includes(document.type));
            }

            return this.documents.filter(document => this.allowedTypesForReturns.includes(document.type));
        }
    },

    methods:
    {
        getTypeName(type)
        {
            return ({
                correction_document: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsCorrectionDocument"),
                credit_note: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsCreditNote"),
                delivery_note: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsDeliveryNote"),
                dunning_letter: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsDunningLetter"),
                invoice_external: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsInvoiceExternal"),
                invoice: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsInvoice"),
                offer: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsOffer"),
                order_confirmation: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsOrderConfirmation"),
                pickup_delivery: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsPickupDelivery"),
                pro_forma_invoice: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsProFormaInvoice"),
                receipt: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsReceipt"),
                return_note: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsReturnNote"),
                success_confirmation: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsSuccessConfirmation"),
                reversal_document: TranslationService.translate("Frontend::Template.myAccountOrderDocumentsReversalDocument")
            })[type];
        },

        getDownloadTooltip(type)
        {
            return TranslationService.translate("Frontend::Template.orderHistoryOpenDocument", { documentName: this.getTypeName(type) });
        }
    }
});
