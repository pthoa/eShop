<div class="header-content">
    <div class="container">
        <div class="row clearfix">
            <div class="content-logo col-sm-3 col-md-3 col-lg-3">
                <div class="header-logo">
                    <span data-action="toggle-nav" class="action nav-toggle"><span>Toggle Nav</span></span>
                    <strong class="logo">
                    <img src="web/images/logo1.png" alt="Magento Commerce" width="208" height="64">
                    </strong>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 space-area">
                <div class="row row-display">
                    <div class="tool-topsearch toggle-tab-mobile col-sm-12 col-md-9 col-lg-9">
                        <div class="search-wrapper ves-autosearch">
                            <div class="dropdown-toggle hidden-md hidden-lg" data-toggle="dropdown">
                                <i class="fa fa-search">&nbsp;</i>
                            </div>
                            <div class="search-content" role="menu">
                                <div class=" box search_box autosearch">
                                    <form method="GET" action="" id="search_form_16922620091498117252">
                                        <div class="filter_type category_filter pull-left hidden-sm hidden-xs">
                                            <span class="fa fa-caret-down"></span>
                                            <select name="category_id">
                                                <option value="2">All Categories</option>
                                                <option value="20">Women</option>
                                                <option value="21">  &nbsp;Tops</option>
                                                <option value="23">  &nbsp;&nbsp;  &nbsp;&nbsp;Jackets</option>
                                                <option value="24">  &nbsp;&nbsp;  &nbsp;&nbsp;Hoodies &amp; Sweatshirts</option>
                                                <option value="25">  &nbsp;&nbsp;  &nbsp;&nbsp;Tees</option>
                                                <option value="26">  &nbsp;&nbsp;  &nbsp;&nbsp;Bras &amp; Tanks</option>
                                                <option value="22">  &nbsp;Bottoms</option>
                                                <option value="27">  &nbsp;&nbsp;  &nbsp;&nbsp;Pants</option>
                                                <option value="28">  &nbsp;&nbsp;  &nbsp;&nbsp;Shorts</option>
                                                <option value="11">Men</option>
                                                <option value="12">  &nbsp;Tops</option>
                                                <option value="14">  &nbsp;&nbsp;  &nbsp;&nbsp;Jackets</option>
                                                <option value="15">  &nbsp;&nbsp;  &nbsp;&nbsp;Hoodies &amp; Sweatshirts</option>
                                                <option value="16">  &nbsp;&nbsp;  &nbsp;&nbsp;Tees</option>
                                                <option value="17">  &nbsp;&nbsp;  &nbsp;&nbsp;Tanks</option>
                                                <option value="13">  &nbsp;Bottoms</option>
                                                <option value="18">  &nbsp;&nbsp;  &nbsp;&nbsp;Pants</option>
                                                <option value="19">  &nbsp;&nbsp;  &nbsp;&nbsp;Shorts</option>
                                                <option value="3">Gear</option>
                                                <option value="9">Training</option>
                                                <option value="10">  &nbsp;Video Download</option>
                                                <option value="37">Home &amp; Garden</option>
                                                <option value="38">Sport</option>
                                                <option value="39">Fashion</option>
                                                <option value="40">Electronic</option>
                                            </select>
                                        </div>
                                        <div id="autosearch16922620091498117252" class="search pull-left control">
                                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input id="search" type="text" name="q" value="" placeholder="Search here.." class="input-text ui-autocomplete-input" autocomplete="off">
                                            <span class="button-search fa fa-search"></span>
                                            <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul>
                                        </div>
                                    </form>
                                </div>
                                <script type="text/javascript">
                                    require([
                                      'jquery',
                                      'jquery/ui'
                                      ],
                                      function($){
                                          var categories_links = jQuery.parseJSON('{"20":"20","21":"21","23":"23","24":"24","25":"25","26":"26","22":"22","27":"27","28":"28","11":"11","12":"12","14":"14","15":"15","16":"16","17":"17","13":"13","18":"18","19":"19","3":"3","9":"9","10":"10","37":"37","38":"38","39":"39","40":"40"}');
                                          var selector = '#autosearch16922620091498117252';
                                          var text_price = "Price";
                                          var total = 0;
                                          var show_image = true;
                                          var show_price = true;
                                          var search_sub_category = true;
                                          var search_description = true;


                                          $("#search_form_16922620091498117252").submit(function(){
                                              return false;
                                          });

                                          $(selector).find('.button-search').bind('click', function(){
                                              url = "http://demo4coder.com/gosmart/gosmart5/catalogsearch/result/";

                                              var category_id = $(".category_filter select[name=\"category_id\"]").first().val();
                                              if(typeof(category_id) == 'undefined')
                                                  category_id = 0;

                                              var search = $('input[name=\'q\']').val();

                                              if(category_id) {
                                                  url += '?cat=' + encodeURIComponent(category_id);
                                                  if (search) {
                                                      url += '&q=' + encodeURIComponent(search);
                                                  } else if(typeof(categories_links[ category_id ]) != "undefined") {
                                                      url = categories_links[ category_id ];
                                                  }
                                              } else if(search) {
                                                  url += '?q=' + encodeURIComponent(search);
                                              }

                                              location = url;
                                          });
                                          $(selector).find('input[name=\'q\']').keypress(function(e) {

                                              if(e.which == 13) {
                                                  url = "http://demo4coder.com/gosmart/gosmart5/catalogsearch/result/";

                                                  var category_id = $(".category_filter select[name=\"category_id\"]").first().val();
                                                  if(typeof(category_id) == 'undefined')
                                                      category_id = 0;

                                                  var search = $('input[name=\'q\']').val();

                                                  if(category_id) {
                                                      url += '?cat=' + encodeURIComponent(category_id);
                                                      if (search) {
                                                          url += '&q=' + encodeURIComponent(search);
                                                      } else if(typeof(categories_links[ category_id ]) != "undefined") {
                                                          url = categories_links[ category_id ];
                                                      }
                                                  } else if(search) {
                                                      url += '?q=' + encodeURIComponent(search);
                                                  }

                                                  location = url;
                                              }
                                          });
                                          $(selector).find('input[name=\'q\']').bind('click', function(e) {
                                              if (e.keyCode == 13) {
                                                  url = "http://demo4coder.com/gosmart/gosmart5/catalogsearch/result/";

                                                  var category_id = $(".category_filter select[name=\"category_id\"]").first().val();
                                                  if(typeof(category_id) == 'undefined')
                                                      category_id = 0;

                                                  var search = $('input[name=\'q\']').val();

                                                  if(category_id) {
                                                      url += '?cat=' + encodeURIComponent(category_id);
                                                      if (search) {
                                                          url += '&q=' + encodeURIComponent(search);
                                                      } else if(typeof(categories_links[ category_id ]) != "undefined") {
                                                          url = categories_links[ category_id ];
                                                      }
                                                  } else if(search) {
                                                      url += '?q=' + encodeURIComponent(search);
                                                  }
                                                  location = url;
                                              }
                                          });


                                          $(document).ready(function() {
                                              $(selector).find('input[name=\'q\']').autocomplete({
                                              delay: 500,
                                              minLength: 1,
                                              appendTo: selector,
                                              position: {
                                                      my: "left top",
                                                      at: "left bottom",
                                                      collision: "none"
                                              },
                                              search: function(event, ui) {
                                                  $(this).addClass("ui-autocomplete-loading");
                                              },
                                              open: function() {
                                                  $(this).removeClass("ui-autocomplete-loading");
                                              },
                                              source: function(request, response) {
                                                  var category_id = $(".category_filter select[name=\"category_id\"]").first().val();
                                                  if(typeof(category_id) == 'undefined'){
                                                      category_id = 0;
                                                  }
                                                  var limit = 3;
                                                  var text = encodeURIComponent(request.term);

                                                  var thumb_width = '&thumb_width=200';
                                                  var thumb_height = '&thumb_height=200';
                                                  var show_image = '&show_image=1';
                                                  var show_price = '&show_price=1';
                                                  var show_short_description = '&show_short_description=0';
                                                  var short_max_char = '&short_max_char=100';
                                                  var search_sub_category = search_sub_category?'&sub_category=true':'';
                                                  var search_description = search_description?'&description=true':'';
                                                  var formkey =  $("input[name='form_key']").val();
                                                  if(text.length >= 1){
                                                  $.ajax({
                                                      url: 'http://demo4coder.com/gosmart/gosmart5/autosearch/index/ajaxgetproduct/',
                                                      dataType: 'json',
                                                      data: 'filter_category_id='+category_id+'&limit='+limit+thumb_width+thumb_height+show_image+show_price+show_short_description+short_max_char+search_sub_category+search_description+'&filter_name='+encodeURIComponent(request.term),
                                                      type:'POST',
                                                      success: function(data) {
                                                          response($.map(data, function(item) {
                                                              if($('.vesautosearch_result')){
                                                                  $('.vesautosearch_result').first().html("");
                                                              }
                                                              total = 0;
                                                              if(item.total){
                                                                  total = item.total;
                                                              }
                                                              return {
                                                                  price: item.price,
                                                                  html: item.html,
                                                                  label: item.name,
                                                                  image: item.image,
                                                                  link:  item.link,
                                                                  value: item.product_id
                                                              }
                                                          }));
                                                      }
                                                  });
                                                  }// end check text length
                                              },
                                              focus: function(event, ui) {
                                                  return false;
                                              }
                                          });
                                              var data_ui_autocomplete = "ui-autocomplete";
                                              if(typeof($(selector).find('input[name=\'q\']').data( "ui-autocomplete" )) == "undefined") {
                                                  data_ui_autocomplete = "autocomplete";
                                              }
                                              $(selector).find('input[name=\'q\']').data( data_ui_autocomplete )._renderMenu = function(ul,b){
                                                  var g=this;
                                                  $.each(b,function(c,f){g._renderItem(ul,f)});
                                                  var category_id = $(".category_filter select[name=\"category_id\"]").first().val();
                                                  if(typeof(category_id) == 'undefined')
                                                      category_id = 0;

                                                  category_id = parseInt(category_id);
                                                  var text_view_all = 'View all %s items';
                                                  text_view_all = text_view_all.replace(/%s/gi, total);
                                                  var url = "";


                                                  url += '?q=' + g.term;

                                                  if(category_id) {
                                                      url += '&cat=' + encodeURIComponent(category_id);
                                                  }

                                                  return $(ul).append('<li><a href="http://demo4coder.com/gosmart/gosmart5/catalogsearch/result/'+url+'" onclick="window.location=this.href">'+text_view_all+'</a></li>');
                                              };
                                              $(selector).find('input[name=\'q\']').data( data_ui_autocomplete )._renderItem = function( ul, item ) {
                                                  var html = item.html;

                                                  var li_element = $("<li></li>").data("ui-autocomplete-item",item).append(html).appendTo(ul);

                                                  $(li_element).click(function(el){
                                                      $(' input[name=\'search\']').val('');
                                                      if(item.link){
                                                          window.location = item.link.replace(/&amp;/gi,'&');
                                                      }
                                                  });



                                                  return li_element;
                                              };

                                          });
                                      });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="content-cart col-sm-12 col-md-3 col-lg-3">
                        <div class="tool-header">
                            <div data-block="minicart" class="minicart-wrapper">
                                <a class="action showcart" href="http://alothemes.com/demo2/bigsale/index.php/checkout/cart/" data-bind="scope: 'minicart_content'">
                                    <span class="minicart-text">
                                        <span class="text cart-title">Your Cart</span>
                                        <span data-bind="html: getCartParam('subtotal')"><span class="price">$0.00</span></span>
                                        <!-- <span class="text cart-item">
                                            <span class="counter-number"><!-- ko text: getCartParam('summary_count') --><!-- /ko -->
                                    </span>
                                    <span class="fa fa-shopping-basket crat-icon">
                                        <span class="counter qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false }, blockLoader: isLoading">
                                            <span class="counter-number">
                                                <!-- ko text: getCartParam('summary_count') -->0<!-- /ko -->
                                            </span>
                                            <span class="counter-label">
                                                <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <script>
                                    window.checkout = {"shoppingCartUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/checkout\/cart\/","checkoutUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/checkout\/","updateItemQtyUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/checkout\/sidebar\/updateItemQty\/","removeItemUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/checkout\/sidebar\/removeItem\/","imageTemplate":"Magento_Catalog\/product\/image_with_borders","baseUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/","minicartMaxItemsVisible":5,"websiteId":"1","customerLoginUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/customer\/account\/login\/","isRedirectRequired":false,"autocomplete":"off","captcha":{"user_login":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/captcha\/refresh\/","isRequired":false},"guest_checkout":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"http:\/\/alothemes.com\/demo2\/bigsale\/index.php\/captcha\/refresh\/","isRequired":false}}};
                                </script>
                                <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" tabindex="-1" role="dialog" aria-describedby="ui-id-3" style="display: none;">
                                    <div class="block block-minicart empty ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-3" style="display: block;">
                                        <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                                            <!-- ko template: getTemplate() -->
                                            <div class="block-title">
                                                <strong>
                                                    <span class="text">
                                                        <!-- ko i18n: 'My Cart' --><span>My Cart</span><!-- /ko -->
                                                    </span>
                                                    <span class="qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false },
                                                        attr: { title: $t('Items in Cart') }" title="Items in Cart">
                                                        <!-- ko text: getCartParam('summary_count') -->0<!-- /ko -->
                                                    </span>
                                                </strong>
                                            </div>
                                            <div class="block-content">
                                                <button type="button" id="btn-minicart-close" class="action close" data-action="close" data-bind="attr: { title: $t('Close') }" title="Close">
                                                    <span>
                                                        <!-- ko i18n: 'Close' --><span>Close</span><!-- /ko -->
                                                    </span>
                                                </button>
                                                <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
                                                <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
                                                <!-- ko ifnot: getCartParam('summary_count') -->
                                                <strong class="subtitle empty" data-bind="visible: closeSidebar()">
                                                    <!-- ko i18n: 'You have no items in your shopping cart.' --><span>You have no items in your shopping cart.</span><!-- /ko -->
                                                </strong>
                                                <!-- ko if: getCartParam('cart_empty_message') --><!-- /ko -->
                                                <!-- /ko -->
                                                <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
                                                <div id="minicart-widgets" class="minicart-widgets">
                                                    <!-- ko foreach: getRegion('promotion') -->
                                                    <!-- ko template: getTemplate() -->
                                                    <!-- ko foreach: {data: elems, as: 'element'} --><!-- /ko -->
                                                    <!-- /ko -->
                                                    <!-- /ko -->
                                                </div>
                                            </div>
                                            <!-- ko foreach: getRegion('sign-in-popup') --><!-- /ko -->
                                            <!-- /ko -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
