<?php
 
namespace Frontend\Providers;

use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;
use IO\Helper\TemplateContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;


class FrontendServiceProvider extends TemplateServiceProvider
{
	/**
    * Register the service provider.
    */
	public function register()
	{

	}
	
	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {   		
	    $this->overrideTemplate("Ceres::PageDesign.Macros.IncludeComponents", "Frontend::PageDesign.Macros.IncludeComponents");
		$this->overrideTemplate("Ceres::PageDesign.Macros.ItemName", "Frontend::PageDesign.Macros.ItemName");
		$this->overrideTemplate("Ceres::PageDesign.Macros.LayoutContainer", "Frontend::PageDesign.Macros.LayoutContainer");
		$this->overrideTemplate("Ceres::PageDesign.Macros.Translations", "Frontend::PageDesign.Macros.Translations");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Footer", "Frontend::PageDesign.Partials.Footer");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Head", "Frontend::PageDesign.Partials.Head");
		$this->overrideTemplate("Ceres::PageDesign.Partials.PageMetadata", "Frontend::PageDesign.Partials.PageMetadata");
		$this->overrideTemplate("Ceres::PageDesign.Partials.PaginationTemplate", "Frontend::PageDesign.Partials.PaginationTemplate");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Header.Breadcrumb", "Frontend::PageDesign.Partials.Header.Breadcrumb");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Header.DefaultHeader.twig", "Frontend::PageDesign.Partials.Header.DefaultHeader");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Header.Header", "Frontend::PageDesign.Partials.Header.Header");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Header.Navigation", "Frontend::PageDesign.Partials.Header.Navigation");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Header.NavigationList", "Frontend::PageDesign.Partials.Header.NavigationList");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Header.SideNavigation", "Frontend::PageDesign.Partials.Header.SideNavigation");
		$this->overrideTemplate("Ceres::PageDesign.PageDesign", "Frontend::PageDesign.PageDesign");	
		
		$this->overrideTemplate("Ceres::Category.Item.Partials.CategoryParallaxImage", "Frontend::Category.Item.Partials.CategoryParallaxImage");
		$this->overrideTemplate("Ceres::Category.Item.Partials.ItemSorting", "Frontend::Category.Item.Partials.ItemSorting");
		$this->overrideTemplate("Ceres::Category.Item.Partials.ItemsPerPage", "Frontend::Category.Item.Partials.ItemsPerPage");
		$this->overrideTemplate("Ceres::Category.Item.Partials.Pagination", "Frontend::Category.Item.Partials.Pagination");
		$this->overrideTemplate("Ceres::Category.Item.Macros.CategoryTree", "Frontend::Category.Item.Macros.CategoryTree");
		$this->overrideTemplate("Ceres::Category.Content.CategoryContent", "Frontend::Category.Content.CategoryContent");
		$this->overrideTemplate("Ceres::Category.Item.CategoryItem", "Frontend::Category.Item.CategoryItem");
		
		$this->overrideTemplate("Ceres::Basket.Basket", "Frontend::Basket.Basket");
		$this->overrideTemplate("Ceres::Basket.Macros.AddToBasket", "Frontend::Basket.Macros.AddToBasket");
		$this->overrideTemplate("Ceres::Checkout.Components.AcceptGtcCheck", "Frontend::Checkout.Components.AcceptGtcCheck");
		$this->overrideTemplate("Ceres::Checkout.Components.Checkout", "Frontend::Checkout.Components.Checkout");
		$this->overrideTemplate("Ceres::Checkout.Components.ContactWishInput", "Frontend::Checkout.Components.ContactWishInput");
		$this->overrideTemplate("Ceres::Checkout.Components.PaymentProviderSelect", "Frontend::Checkout.Components.PaymentProviderSelect");
		$this->overrideTemplate("Ceres::Checkout.Components.PlaceOrder", "Frontend::Checkout.Components.PlaceOrder");
		$this->overrideTemplate("Ceres::Checkout.Components.ShippingPrivacyHintCheck", "Frontend::Checkout.Components.ShippingPrivacyHintCheck");
		$this->overrideTemplate("Ceres::Checkout.Components.ShippingProfileSelect", "Frontend::Checkout.Components.ShippingProfileSelect");
		$this->overrideTemplate("Ceres::Checkout.Components.SubscribeNewsletterCheck", "Frontend::Checkout.Components.SubscribeNewsletterCheck");
		$this->overrideTemplate("Ceres::Checkout.Macros.Address", "Frontend::Checkout.Macros.Address");
		$this->overrideTemplate("Ceres::Checkout.Macros.OrderTotals", "Frontend::Checkout.Macros.OrderTotals");
		$this->overrideTemplate("Ceres::Checkout.CheckoutCategory", "Frontend::Checkout.CheckoutCategory");
		$this->overrideTemplate("Ceres::Checkout.CheckoutView", "Frontend::Checkout.CheckoutView");
		$this->overrideTemplate("Ceres::Checkout.OrderConfirmation", "Frontend::Checkout.OrderConfirmation");
		$this->overrideTemplate("Ceres::Checkout.OrderDetails", "Frontend::Checkout.OrderDetails");
		$this->overrideTemplate("Ceres::Containers.ItemLists.ItemList1", "Frontend::Containers.ItemLists.ItemList1");
		$this->overrideTemplate("Ceres::Containers.ItemLists.ItemList2", "Frontend::Containers.ItemLists.ItemList2");
		$this->overrideTemplate("Ceres::Containers.ItemLists.ItemList3", "Frontend::Containers.ItemLists.ItemList3");
		$this->overrideTemplate("Ceres::Containers.Partials.ItemLists.ItemList", "Frontend::Containers.Partials.ItemLists.ItemList");
		$this->overrideTemplate("Ceres::Containers.Partials.ItemLists.ItemListHeader", "Frontend::Containers.Partials.ItemLists.ItemListHeader");
		$this->overrideTemplate("Ceres::Customer.ChangeMail", "Frontend::Customer.ChangeMail");
		$this->overrideTemplate("Ceres::Customer.ChangeMailCategory", "Frontend::Customer.ChangeMailCategory");
		$this->overrideTemplate("Ceres::Customer.Contact", "Frontend::Customer.Contact");
		$this->overrideTemplate("Ceres::Customer.Login", "Frontend::Customer.Login");
		$this->overrideTemplate("Ceres::Customer.Register", "Frontend::Customer.Register");
		$this->overrideTemplate("Ceres::Customer.ResetPassword", "Frontend::Customer.ResetPassword");
		$this->overrideTemplate("Ceres::Customer.ResetPasswordCategory", "Frontend::Customer.ResetPasswordCategory");
		$this->overrideTemplate("Ceres::Customer.ResetPasswordMail", "Frontend::Customer.ResetPasswordMail");
		$this->overrideTemplate("Ceres::Customer.Components.AddressSelect.AddressHeader", "Frontend::Customer.Components.AddressSelect.AddressHeader");
		$this->overrideTemplate("Ceres::Customer.Components.AddressSelect.AddressSelect", "Frontend::Customer.Components.AddressSelect.AddressSelect");
		$this->overrideTemplate("Ceres::Customer.Components.AddressSelect.CreateUpdateAddress", "Frontend::Customer.Components.AddressSelect.CreateUpdateAddress");
		$this->overrideTemplate("Ceres::Customer.Components.Contact.ContactCard", "Frontend::Customer.Components.Contact.ContactCard");
		$this->overrideTemplate("Ceres::Customer.Components.Contact.ContactMail", "Frontend::Customer.Components.Contact.ContactMail");
		$this->overrideTemplate("Ceres::Homepage.Homepage", "Frontend::Homepage.Homepage");
		$this->overrideTemplate("Ceres::Homepage.MarketingHomepage", "Frontend::Homepage.MarketingHomepage");
		$this->overrideTemplate("Ceres::Item.SingleItemView", "Frontend::Item.SingleItemView");
		$this->overrideTemplate("Ceres::Item.SingleItemWrapper", "Frontend::Item.SingleItemWrapper");
		$this->overrideTemplate("Ceres::MyAccount.MyAccountCategory", "Frontend::MyAccount.MyAccountCategory");
		$this->overrideTemplate("Ceres::MyAccount.MyAccountView", "Frontend::MyAccount.MyAccountView");
		$this->overrideTemplate("Ceres::MyAccount.Components.AccountSettings", "Frontend::MyAccount.Components.AccountSettings");
		$this->overrideTemplate("Ceres::MyAccount.Components.BankDataSelect", "Frontend::MyAccount.Components.BankDataSelect");
		$this->overrideTemplate("Ceres::MyAccount.Components.ChangePaymentMethod", "Frontend::MyAccount.Components.ChangePaymentMethod");
		$this->overrideTemplate("Ceres::MyAccount.Components.History", "Frontend::MyAccount.Components.History");
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderDocuments", "Frontend::MyAccount.Components.OrderDocuments");		
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderHistory", "Frontend::MyAccount.Components.OrderHistory");		
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderHistoryList", "Frontend::MyAccount.Components.OrderHistoryList");		
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderHistoryListItem", "Frontend::MyAccount.Components.OrderHistoryListItem");	
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderReturnHistory", "Frontend::MyAccount.Components.OrderReturnHistory");		
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderReturnHistoryItem", "Frontend::MyAccount.Components.OrderReturnHistoryItem");		
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderReturnHistoryList", "Frontend::MyAccount.Components.OrderReturnHistoryList");		
		$this->overrideTemplate("Ceres::MyAccount.Components.OrderReturnHistoryListItem", "Frontend::MyAccount.Components.OrderReturnHistoryListItem");		
		$this->overrideTemplate("Ceres::MyAccount.Partials.OrderHistoryListItemDetails", "Frontend::MyAccount.Partials.OrderHistoryListItemDetails");		
		$this->overrideTemplate("Ceres::Newsletter.NewsletterOptOut", "Frontend::Newsletter.NewsletterOptOut");	
		$this->overrideTemplate("Ceres::OrderReturn.OrderReturnConfirmation", "Frontend::OrderReturn.OrderReturnConfirmation");	
		$this->overrideTemplate("Ceres::OrderReturn.OrderReturnView", "Frontend::OrderReturn.OrderReturnView");	
		$this->overrideTemplate("Ceres::StaticPages.CancellationForm", "Frontend::StaticPages.CancellationForm");
		$this->overrideTemplate("Ceres::StaticPages.CancellationRights", "Frontend::StaticPages.CancellationRights");
		$this->overrideTemplate("Ceres::StaticPages.ItemNotFound", "Frontend::StaticPages.ItemNotFound");
		$this->overrideTemplate("Ceres::StaticPages.LegalDisclosure", "Frontend::StaticPages.LegalDisclosure");
		$this->overrideTemplate("Ceres::StaticPages.PageNotFound", "Frontend::StaticPages.PageNotFound");
		$this->overrideTemplate("Ceres::StaticPages.PrivacyPolicy", "Frontend::StaticPages.PrivacyPolicy");
		$this->overrideTemplate("Ceres::StaticPages.TermsAndConditions", "Frontend::StaticPages.TermsAndConditions");	
		$this->overrideTemplate("Ceres::StaticPages.TermsAndConditions", "Frontend::StaticPages.TermsAndConditions");	
		$this->overrideTemplate("Ceres::Widgets.ShopBuilderDataStore", "Frontend::Widgets.ShopBuilderDataStore");	
		$this->overrideTemplate("Ceres::Widgets.WidgetComponents", "Frontend::Widgets.WidgetComponents");
		$this->overrideTemplate("Ceres::Widgets.TopBarWidget", "Frontend::Widgets.WidgetComponents");	
		$this->overrideTemplate("Ceres::Widgets.Basket.BasketTotalsWidget", "Frontend::Widgets.Basket.BasketTotalsWidget");
		$this->overrideTemplate("Ceres::Widgets.Basket.BasketWidget", "Frontend::Widgets.Basket.BasketWidget");
		$this->overrideTemplate("Ceres::Widgets.Basket.CouponWidget", "Frontend::Widgets.Basket.CouponWidget");
		$this->overrideTemplate("Ceres::Widgets.Basket.ShippingCountryWidget", "Frontend::Widgets.Basket.ShippingCountryWidget");
		$this->overrideTemplate("Ceres::Widgets.Category.ItemGridWidget", "Frontend::Widgets.Category.ItemGridWidget");
		$this->overrideTemplate("Ceres::Widgets.Category.ItemSortingWidget", "Frontend::Widgets.Category.ItemSortingWidget");
		$this->overrideTemplate("Ceres::Widgets.Category.ItemsPerPageWidget", "Frontend::Widgets.Category.ItemsPerPageWidget");
		$this->overrideTemplate("Ceres::Widgets.Category.PaginationWidget", "Frontend::Widgets.Category.PaginationWidget");
		$this->overrideTemplate("Ceres::Widgets.Category.ToolbarWidget", "Frontend::Widgets.Category.ToolbarWidget");
		$this->overrideTemplate("Ceres::Widgets.Category.Filter.FilterBaseWidget", "Frontend::Widgets.Category.Filter.FilterBaseWidget");
		$this->overrideTemplate("Ceres::Widgets.Category.Filter.SelectedFilterWidget", "Frontend::Widgets.Category.Filter.SelectedFilterWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.CancelPaymentWidget", "Frontend::Widgets.Checkout.CancelPaymentWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.ContactWishWidget", "Frontend::Widgets.Checkout.ContactWishWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.CustomerSignWidget", "Frontend::Widgets.Checkout.CustomerSignWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.GtcCheckWidget", "Frontend::Widgets.Checkout.GtcCheckWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.PaymentProviderWidget", "Frontend::Widgets.Checkout.PaymentProviderWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.PlaceOrderWidget", "Frontend::Widgets.Checkout.PlaceOrderWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.ShippingPrivacyCheckWidget", "Frontend::Widgets.Checkout.ShippingPrivacyCheckWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.ShippingProfileWidget", "Frontend::Widgets.Checkout.ShippingProfileWidget");
		$this->overrideTemplate("Ceres::Widgets.Checkout.SubscribeNewsletterCheckWidget", "Frontend::Widgets.Checkout.SubscribeNewsletterCheckWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.BackgroundWidget", "Frontend::Widgets.Common.BackgroundWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.CodeWidget", "Frontend::Widgets.Common.CodeWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.CollapseWidget", "Frontend::Widgets.Common.CollapseWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.GoogleMapsWidget", "Frontend::Widgets.Common.GoogleMapsWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.ImageBoxWidget", "Frontend::Widgets.Common.ImageBoxWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.ImageCarouselWidget", "Frontend::Widgets.Common.ImageCarouselWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.InlineTextWidget", "Frontend::Widgets.Common.InlineTextWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.ItemListWidget", "Frontend::Widgets.Common.ItemListWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.LinkWidget", "Frontend::Widgets.Common.LinkWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.ListWidget", "Frontend::Widgets.Common.ListWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.LiveShoppingWidget", "Frontend::Widgets.Common.LiveShoppingWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.NewsletterUnsubscribeWidget", "Frontend::Widgets.Common.NewsletterUnsubscribeWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.NewsletterWidget", "Frontend::Widgets.Common.NewsletterWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.PrintButtonWidget", "Frontend::Widgets.Common.PrintButtonWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.PrivacySettingsWidget", "Frontend::Widgets.Common.PrivacySettingsWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.SeparatorWidget", "Frontend::Widgets.Common.SeparatorWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.TextWidget", "Frontend::Widgets.Common.TextWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.TitleBarWidget", "Frontend::Widgets.Common.TitleBarWidget");
		$this->overrideTemplate("Ceres::Widgets.Common.TitleBarWidget", "Frontend::Widgets.Common.TitleBarWidget");
		$this->overrideTemplate("Ceres::Widgets.Contact.ContactDetailsWidget", "Frontend::Widgets.Contact.ContactDetailsWidget");
		$this->overrideTemplate("Ceres::Widgets.Customer.AddressWidget", "Frontend::Widgets.Customer.AddressWidget");
		$this->overrideTemplate("Ceres::Widgets.Customer.ChangeMailWidget", "Frontend::Widgets.Customer.ChangeMailWidget");
		$this->overrideTemplate("Ceres::Widgets.Customer.ChangePasswordWidget", "Frontend::Widgets.Customer.ChangePasswordWidget");
		$this->overrideTemplate("Ceres::Widgets.Footer.CookieBarWidget", "Frontend::Widgets.Footer.CookieBarWidget");
		$this->overrideTemplate("Ceres::Widgets.Footer.LegalInformationWidget", "Frontend::Widgets.Footer.LegalInformationWidget");
		$this->overrideTemplate("Ceres::Widgets.Form.AcceptPrivacyPolicyWidget", "Frontend::Widgets.Form.AcceptPrivacyPolicyWidget");
		$this->overrideTemplate("Ceres::Widgets.Form.MailAttachmentWidget", "Frontend::Widgets.Form.MailAttachmentWidget");
		$this->overrideTemplate("Ceres::Widgets.Form.MailFormWidget", "Frontend::Widgets.Form.MailFormWidget");
		$this->overrideTemplate("Ceres::Widgets.Form.MailInputWidget", "Frontend::Widgets.Form.MailInputWidget");
		$this->overrideTemplate("Ceres::Widgets.Form.SelectionWidget", "Frontend::Widgets.Form.SelectionWidget");
		$this->overrideTemplate("Ceres::Widgets.Form.TextAreaWidget", "Frontend::Widgets.Form.TextAreaWidget");
		$this->overrideTemplate("Ceres::Widgets.Form.TextInputWidget", "Frontend::Widgets.Form.TextInputWidget");
		$this->overrideTemplate("Ceres::Widgets.Grid.AdditionalInformationWidget", "Frontend::Widgets.Grid.AdditionalInformationWidget");
		$this->overrideTemplate("Ceres::Widgets.Grid.FourColumnWidget", "Frontend::Widgets.Grid.FourColumnWidget");
		$this->overrideTemplate("Ceres::Widgets.Grid.StickyContainerWidget", "Frontend::Widgets.Grid.StickyContainerWidget");
		$this->overrideTemplate("Ceres::Widgets.Grid.TabWidget", "Frontend::Widgets.Grid.TabWidget");
		$this->overrideTemplate("Ceres::Widgets.Grid.ThreeColumnWidget", "Frontend::Widgets.Grid.ThreeColumnWidget");
		$this->overrideTemplate("Ceres::Widgets.Grid.TwoColumnWidget", "Frontend::Widgets.Grid.TwoColumnWidget");
		$this->overrideTemplate("Ceres::Widgets.Header.BreadcrumbWidget", "Frontend::Widgets.Header.BreadcrumbWidget");
		$this->overrideTemplate("Ceres::Widgets.Header.LanguageDetectionWidget", "Frontend::Widgets.Header.LanguageDetectionWidget");	
		$this->overrideTemplate("Ceres::Widgets.Header.NavigationWidget", "Frontend::Widgets.Header.NavigationWidget");	
		$this->overrideTemplate("Ceres::Widgets.Header.SearchSuggestionWidget", "Frontend::Widgets.Header.SearchSuggestionWidget");	
		$this->overrideTemplate("Ceres::Widgets.Header.TopBarWidget", "Frontend::Widgets.Header.TopBarWidget");	
		$this->overrideTemplate("Ceres::Widgets.Helper.TwigBuilder", "Frontend::Widgets.Helper.TwigBuilder");	
		$this->overrideTemplate("Ceres::Widgets.Helper.WidgetHelper", "Frontend::Widgets.Helper.WidgetHelper");	
		$this->overrideTemplate("Ceres::Widgets.Item.AddToBasketWidget", "Frontend::Widgets.Item.AddToBasketWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.AddToWishListWidget", "Frontend::Widgets.Item.AddToWishListWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.AttributeWidget", "Frontend::Widgets.AttributeWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.GraduatedPriceWidget", "Frontend::Widgets.Item.GraduatedPriceWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.ItemAvailabilityWidget", "Frontend::Widgets.Item.ItemAvailabilityWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.ItemBundleWidget", "Frontend::Widgets.Item.ItemBundleWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.ItemDataTableWidget", "Frontend::Widgets.Item.ItemDataTableWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.ItemImageWidget", "Frontend::Widgets.Item.ItemImageWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.ItemPriceWidget", "Frontend::Widgets.Item.ItemPriceWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.ItemSetWidget", "Frontend::Widgets.Item.ItemSetWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.OrderPropertyWidget", "Frontend::Widgets.Item.OrderPropertyWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.QuantityInputWidget", "Frontend::Widgets.Item.QuantityInputWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.TagsWidget", "Frontend::Widgets.Item.TagsWidget");	
		$this->overrideTemplate("Ceres::Widgets.Item.WishListWidget", "Frontend::Widgets.Item.WishListWidget");	
		$this->overrideTemplate("Ceres::Widgets.Legal.LegalTextsWidget", "Frontend::Widgets.Legal.LegalTextsWidget");	
		$this->overrideTemplate("Ceres::Widgets.Login.GuestLoginWidget", "Frontend::Widgets.Login.GuestLoginWidget");	
		$this->overrideTemplate("Ceres::Widgets.Login.LoginWidget", "Frontend::Widgets.Login.LoginWidget");	
		$this->overrideTemplate("Ceres::Widgets.Login.RegistrationWidget", "Frontend::Widgets.Login.RegistrationWidget");	
		$this->overrideTemplate("Ceres::Widgets.MyAccount.AccountSettingsWidget", "Frontend::Widgets.MyAccount.AccountSettingsWidget");	
		$this->overrideTemplate("Ceres::Widgets.MyAccount.BankDataSelectWidget", "Frontend::Widgets.MyAccount.BankDataSelectWidget");	
		$this->overrideTemplate("Ceres::Widgets.MyAccount.GreetingWidget", "Frontend::Widgets.MyAccount.GreetingWidget");	
		$this->overrideTemplate("Ceres::Widgets.MyAccount.LogoutButtonWidget", "Frontend::Widgets.MyAccount.LogoutButtonWidget");	
		$this->overrideTemplate("Ceres::Widgets.MyAccount.OrderHistoryWidget", "Frontend::Widgets.MyAccount.OrderHistoryWidget");	
		$this->overrideTemplate("Ceres::Widgets.MyAccount.OrderReturnHistoryWidget", "Frontend::Widgets.MyAccount.OrderReturnHistoryWidget");	
		$this->overrideTemplate("Ceres::Widgets.Navigation.NavigationTreeWidget", "Frontend::Widgets.Navigation.NavigationTreeWidget");	
		$this->overrideTemplate("Ceres::Widgets.Navigation.StepByStepNavigationWidget", "Frontend::Widgets.Navigation.StepByStepNavigationWidget");		
		$this->overrideTemplate("Ceres::Widgets.OrderConfirmation.OrderDataWidget", "Frontend::Widgets.OrderConfirmation.OrderDataWidget");	
		$this->overrideTemplate("Ceres::Widgets.OrderConfirmation.OrderDocumentsWidget", "Frontend::Widgets.OrderConfirmation.OrderDocumentsWidget");	
		$this->overrideTemplate("Ceres::Widgets.OrderConfirmation.OrderReturnWidget", "Frontend::Widgets.OrderConfirmation.OrderReturnWidget");	
		$this->overrideTemplate("Ceres::Widgets.OrderConfirmation.OrderTotalsWidget", "Frontend::Widgets.OrderConfirmation.OrderTotalsWidget");	
		$this->overrideTemplate("Ceres::Widgets.OrderConfirmation.PurchasedItemsWidget", "Frontend::Widgets.OrderConfirmation.PurchasedItemsWidget");	
		$this->overrideTemplate("Ceres::WishList.WishListView", "Frontend::WishList.WishListView");	
		
		$container = pluginApp(ResultFieldTemplate::class);
		$container->setTemplate(ResultFieldTemplate::TEMPLATE_LIST_ITEM,'Frontend::ResultFields.AutoCompleteListItem');
		$container->setTemplate(ResultFieldTemplate::TEMPLATE_LIST_ITEM,'Frontend::ResultFields.BasketItem');
		$container->setTemplate(ResultFieldTemplate::TEMPLATE_LIST_ITEM,'Frontend::ResultFields.CategoryTree');
		$container->setTemplate(ResultFieldTemplate::TEMPLATE_LIST_ITEM,'Frontend::ResultFields.ListItem');
        $container->setTemplate(ResultFieldTemplate::TEMPLATE_LIST_ITEM,'Frontend::ResultFields.SingleItem');
		$container->setTemplate(ResultFieldTemplate::TEMPLATE_LIST_ITEM,'Frontend::ResultFields.VariationAttributeMap');
    }
}
