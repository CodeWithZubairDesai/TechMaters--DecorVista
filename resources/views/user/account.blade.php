@extends('frontend_header_footer.layout')

@section('title')

Account

@endsection
@section('main')
 
    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">My Account</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>My Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">                                            
                                            <a class="active show" data-bs-toggle="tab" href="#ltn_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_2">Profiles <i class="fas fa-user"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_3">address <i class="fas fa-map-marker-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_4">Account Details <i class="fas fa-user"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_5">My Properties <i class="fa-solid fa-list"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_6">Favorited Properties <i class="fa-solid fa-heart"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_7">Add Property <i class="fa-solid fa-map-location-dot"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_8">Payments <i class="fa-solid fa-money-check-dollar"></i></a>
                                            <a data-bs-toggle="tab" href="#ltn_tab_1_9">Change Password <i class="fa-solid fa-lock"></i></a>
                                            <a href="login.html">Logout <i class="fas fa-sign-out-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="ltn_tab_1_1">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong>UserName</strong> (not <strong>UserName</strong>? <small><a href="login.html">Log out</a></small> )</p>
                                                <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_2">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <!-- comment-area -->
                                                <div class="ltn__comment-area mb-50">
                                                    <div class="ltn-author-introducing clearfix">
                                                        <div class="author-img">
                                                            <img src="img/blog/author.jpg" alt="Author Image">
                                                        </div>
                                                        <div class="author-info">
                                                            <h6>Agent of Property</h6>
                                                            <h2>Rosalina D. William</h2>
                                                            <div class="footer-address">
                                                                <ul>
                                                                    <li>
                                                                        <div class="footer-address-icon">
                                                                            <i class="icon-placeholder"></i>
                                                                        </div>
                                                                        <div class="footer-address-info">
                                                                            <p>Brooklyn, New York, United States</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="footer-address-icon">
                                                                            <i class="icon-call"></i>
                                                                        </div>
                                                                        <div class="footer-address-info">
                                                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="footer-address-icon">
                                                                            <i class="icon-mail"></i>
                                                                        </div>
                                                                        <div class="footer-address-info">
                                                                            <p><a href="mailto:example@example.com">example@example.com</a></p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                                                        <h4 class="title-2">Get A Quote</h4>
                                                        <form id="contact-form" action="mail.php" method="post">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="input-item input-item-name ltn__custom-icon">
                                                                        <input type="text" name="name" placeholder="Enter your name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-item input-item-email ltn__custom-icon">
                                                                        <input type="email" name="email" placeholder="Enter email address">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-item">
                                                                        <select class="nice-select">
                                                                            <option>Select Service Type</option>
                                                                            <option>Property Management </option>
                                                                            <option>Mortgage Service </option>
                                                                            <option>Consulting Service</option>
                                                                            <option>Home Buying</option>
                                                                            <option>Home Selling</option>
                                                                            <option>Escrow Services</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-item input-item-phone ltn__custom-icon">
                                                                        <input type="text" name="phone" placeholder="Enter phone number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                                <textarea name="message" placeholder="Enter message"></textarea>
                                                            </div>
                                                            <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p>
                                                            <div class="btn-wrapper mt-0">
                                                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">get a free service</button>
                                                            </div>
                                                            <p class="form-messege mb-0 mt-20"></p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_3">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="row">
                                                    <div class="col-md-6 col-12 learts-mb-30">
                                                        <h4>Billing Address <small><a href="#">edit</a></small></h4>
                                                        <address>
                                                            <p><strong>Alex Tuntuni</strong></p>
                                                            <p>1355 Market St, Suite 900 <br>
                                                                San Francisco, CA 94103</p>
                                                            <p>Mobile: (123) 456-7890</p>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-6 col-12 learts-mb-30">
                                                        <h4>Shipping Address <small><a href="#">edit</a></small></h4>
                                                        <address>
                                                            <p><strong>Alex Tuntuni</strong></p>
                                                            <p>1355 Market St, Suite 900 <br>
                                                                San Francisco, CA 94103</p>
                                                            <p>Mobile: (123) 456-7890</p>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_4">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="ltn__form-box">
                                                    <form action="#">
                                                        <div class="row mb-50">
                                                            <div class="col-md-6">
                                                                <label>First name:</label>
                                                                <input type="text" name="ltn__name">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Last name:</label>
                                                                <input type="text" name="ltn__lastname">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Display Name:</label>
                                                                <input type="text" name="ltn__lastname" placeholder="Ethan">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Display Email:</label>
                                                                <input type="email" name="ltn__lastname" placeholder="example@example.com">
                                                            </div>
                                                        </div>
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Current password (leave blank to leave unchanged):</label>
                                                                    <input type="password" name="ltn__name">
                                                                    <label>New password (leave blank to leave unchanged):</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                    <label>Confirm new password:</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="btn-wrapper">
                                                            <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_5">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="ltn__my-properties-table table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">My Properties</th>
                                                            <th scope="col"></th>
                                                            <th scope="col">Date Added</th>
                                                            <th scope="col">Actions</th>
                                                            <th scope="col">Delete</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td class="ltn__my-properties-img">
                                                                <a href="product-details.html"><img src="img/product-3/2.jpg" alt="#"></a>
                                                            </td>
                                                            <td>
                                                                <div class="ltn__my-properties-info">
                                                                    <h6 class="mb-10"><a href="product-details.html">sdfasdfdsfsdafs</a></h6>
                                                                    <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                                    <div class="product-ratting">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Feb 22, 2022</td>
                                                            <td><a href="#">Edit</a></td>
                                                            <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="ltn__my-properties-img">
                                                                <a href="product-details.html"><img src="img/product-3/3.jpg" alt="#"></a>
                                                            </td>
                                                            <td>
                                                                <div class="ltn__my-properties-info">
                                                                    <h6 class="mb-10"><a href="product-details.html">sdfasdfdsfsdafs</a></h6>
                                                                    <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                                    <div class="product-ratting">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Feb 22, 2022</td>
                                                            <td><a href="#">Edit</a></td>
                                                            <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="ltn__my-properties-img">
                                                                <a href="product-details.html"><img src="img/product-3/7.jpg" alt="#"></a>
                                                            </td>
                                                            <td>
                                                                <div class="ltn__my-properties-info">
                                                                    <h6 class="mb-10"><a href="product-details.html">sdfasdfdsfsdafs</a></h6>
                                                                    <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                                    <div class="product-ratting">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Feb 22, 2022</td>
                                                            <td><a href="#">Edit</a></td>
                                                            <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                                <div class="ltn__pagination-area text-center">
                                                    <div class="ltn__pagination">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                                            <li><a href="#">1</a></li>
                                                            <li class="active"><a href="#">2</a></li>
                                                            <li><a href="#">3</a></li>
                                                            <li><a href="#">...</a></li>
                                                            <li><a href="#">10</a></li>
                                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_6">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="ltn__my-properties-table table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Top Property</th>
                                                            <th scope="col"></th>
                                                            <th scope="col">Date Added</th>
                                                            <th scope="col">Actions</th>
                                                            <th scope="col">Delete</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td class="ltn__my-properties-img">
                                                                <a href="product-details.html"><img src="img/product-3/2.jpg" alt="#"></a>
                                                            </td>
                                                            <td>
                                                                <div class="ltn__my-properties-info">
                                                                    <h6 class="mb-10"><a href="product-details.html">sdfasdfdsfsdafs</a></h6>
                                                                    <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                                    <div class="product-ratting">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Feb 22, 2022</td>
                                                            <td><a href="#">Edit</a></td>
                                                            <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="ltn__my-properties-img">
                                                                <a href="product-details.html"><img src="img/product-3/3.jpg" alt="#"></a>
                                                            </td>
                                                            <td>
                                                                <div class="ltn__my-properties-info">
                                                                    <h6 class="mb-10"><a href="product-details.html">sdfasdfdsfsdafs</a></h6>
                                                                    <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                                    <div class="product-ratting">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Feb 22, 2022</td>
                                                            <td><a href="#">Edit</a></td>
                                                            <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="ltn__my-properties-img">
                                                                <a href="product-details.html"><img src="img/product-3/7.jpg" alt="#"></a>
                                                            </td>
                                                            <td>
                                                                <div class="ltn__my-properties-info">
                                                                    <h6 class="mb-10"><a href="product-details.html">sdfasdfdsfsdafs</a></h6>
                                                                    <small><i class="icon-placeholder"></i> Brooklyn, New York, United States</small>
                                                                    <div class="product-ratting">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Feb 22, 2022</td>
                                                            <td><a href="#">Edit</a></td>
                                                            <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                                <div class="ltn__pagination-area text-center">
                                                    <div class="ltn__pagination">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                                            <li><a href="#">1</a></li>
                                                            <li class="active"><a href="#">2</a></li>
                                                            <li><a href="#">3</a></li>
                                                            <li><a href="#">...</a></li>
                                                            <li><a href="#">10</a></li>
                                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_7">
                                            <div class="ltn__myaccount-tab-content-inner">                                                
                                                <h6>Property Description</h6>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="*Title (mandatory)">
                                                        </div>
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <textarea name="ltn__message" placeholder="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Property Price</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-item  input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Price in $ (only numbers)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="After Price Label (ex: /month)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Before Price Label (ex: from)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Yearly Tax Rate">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Homeowners Association Fee(monthly)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Select Categories</h6>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="input-item">
                                                            <select class="nice-select">
                                                                <option>None</option>
                                                                <option>Apartments</option>
                                                                <option>Condos</option>
                                                                <option>Duplexes</option>
                                                                <option>Houses</option>
                                                                <option>Industrial</option>
                                                                <option>Land</option>
                                                                <option>Offices</option>
                                                                <option>Retail</option>
                                                                <option>Villas</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="input-item">
                                                            <select class="nice-select">
                                                                <option>None</option>
                                                                <option>Rentals</option>
                                                                <option>Sales</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="input-item">
                                                            <select class="nice-select">
                                                                <option>no status</option>
                                                                <option>Active</option>
                                                                <option>hot offer</option>
                                                                <option>new offer</option>
                                                                <option>open house</option>
                                                                <option>sold</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <h6>Listing Media</h6>
                                                <input type="file" id="myFile" name="filename" class="btn theme-btn-3 mb-10"><br>
                                                <p>
                                                    <small>* At least 1 image is required for a valid submission.Minimum size is 500/500px.</small><br>
                                                    <small>* PDF files upload supported as well.</small><br>
                                                    <small>* Images might take longer to be processed.</small>
                                                </p>
                                                <h6>Video Option</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <select class="nice-select">
                                                                <option>Video from</option>
                                                                <option>vimeo</option>
                                                                <option>youtube</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Embed Video ID">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Virtual Tour</h6>
                                                <div class="input-item input-item-textarea ltn__custom-icon">
                                                    <textarea name="ltn__message" placeholder="Virtual Tour:"></textarea>
                                                </div>
                                                <h6>Listing Location</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="*Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Country">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="County / State">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="City">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Neighborhood">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Zip">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="property-details-google-map mb-60">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Latitude (for Google Maps)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Longitude (for Google Maps)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="checkbox-item">Enable Google Street View
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Google Street View - Camera Angle (value from 0 to 360)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Listing Details</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Size in ft2 (*only numbers)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Lot Size in ft2 (*only numbers)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Rooms (*only numbers)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Bedrooms (*only numbers)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Bathrooms (*only numbers)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Custom ID (*text)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Garages (*text)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Year Built (*numeric)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Garage Size (*text)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Available from (*date)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Basement (*text)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Extra Details (*text)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Roofing (*text)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Exterior Material (*text)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <select class="nice-select">
                                                                <option>Structure Type</option>
                                                                <option>Not Available</option>
                                                                <option>Brick</option>
                                                                <option>Wood</option>
                                                                <option>Cement</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <select class="nice-select">
                                                                <option>Floors No</option>
                                                                <option>Not Available</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <textarea name="ltn__message" placeholder="Owner/Agent notes (*not visible on front end)"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Select Energy Class</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <select class="nice-select">
                                                                <option>Select Energy Class (EU regulation)</option>
                                                                <option>A+</option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>D</option>
                                                                <option>E</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <input type="text" name="ltn__name" placeholder="Energy Index in kWh/m2a">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Amenities and Features</h6>  
                                                <h6>Interior Details</h6>                      
                                                <div class="row">                                
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Equipped Kitchen
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Gym
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Laundry
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Media Room
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>  
                                                <h6 class="mt-20">Outdoor Details</h6>                      
                                                <div class="row">                                
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Back yard
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Basketball court
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Front yard
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Garage Attached
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Hot Bath
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Pool
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div> 
                                                <h6 class="mt-20">Utilities</h6>                      
                                                <div class="row">                                
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Central Air
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Electricity
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Heating
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Natural Gas
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Ventilation
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Water
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div> 
                                                <h6 class="mt-20">Other Features</h6>                      
                                                <div class="row">                                
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Chair Accessible
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Elevator
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Fireplace
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Smoke detectors
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">Washer and dryer
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label class="checkbox-item">WiFi
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="alert alert-warning d-none" role="alert">
                                                    Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.
                                                </div>
                                                <div class="btn-wrapper text-center--- mt-30">
                                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit Property</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_8">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="ltn__checkout-inner">
                                                            <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                                                                <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-toggle="collapse">Click here to login</a></h5>
                                                                <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                                                                    <div class="ltn_coupon-code-form ltn__form-box">
                                                                        <p>Please login your accont.</p>
                                                                        <form action="#" >
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="input-item input-item-name ltn__custom-icon">
                                                                                        <input type="text" name="ltn__name" placeholder="Enter your name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="input-item input-item-email ltn__custom-icon">
                                                                                        <input type="email" name="ltn__email" placeholder="Enter email address">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                                                            <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                                                            <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                                                                <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-toggle="collapse">Click here to enter your code</a></h5>
                                                                <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                                                                    <div class="ltn__coupon-code-form">
                                                                        <p>If you have a coupon code, please apply it below.</p>
                                                                        <form action="#" >
                                                                            <input type="text" name="coupon-code" placeholder="Coupon code">
                                                                            <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ltn__checkout-single-content mt-50">
                                                                <h4 class="title-2">Billing Details</h4>
                                                                <div class="ltn__checkout-single-content-info">
                                                                    <form action="#" >
                                                                        <h6>Personal Information</h6>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="input-item input-item-name ltn__custom-icon">
                                                                                    <input type="text" name="ltn__name" placeholder="First name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-item input-item-name ltn__custom-icon">
                                                                                    <input type="text" name="ltn__lastname" placeholder="Last name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-item input-item-email ltn__custom-icon">
                                                                                    <input type="email" name="ltn__email" placeholder="email address">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-item input-item-phone ltn__custom-icon">
                                                                                    <input type="text" name="ltn__phone" placeholder="phone number">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-item input-item-website ltn__custom-icon">
                                                                                    <input type="text" name="ltn__company" placeholder="Company name (optional)">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-item input-item-website ltn__custom-icon">
                                                                                    <input type="text" name="ltn__phone" placeholder="Company address (optional)">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6">
                                                                                <h6>Country</h6>
                                                                                <div class="input-item">
                                                                                    <select class="nice-select">
                                                                                        <option>Select Country</option>
                                                                                        <option>Australia</option>
                                                                                        <option>Canada</option>
                                                                                        <option>China</option>
                                                                                        <option>Morocco</option>
                                                                                        <option>Saudi Arabia</option>
                                                                                        <option>United Kingdom (UK)</option>
                                                                                        <option>United States (US)</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <h6>Address</h6>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="input-item">
                                                                                            <input type="text" placeholder="House number and street name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="input-item">
                                                                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6">
                                                                                <h6>Town / City</h6>
                                                                                <div class="input-item">
                                                                                    <input type="text" placeholder="City">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6">
                                                                                <h6>State </h6>
                                                                                <div class="input-item">
                                                                                    <input type="text" placeholder="State">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6">
                                                                                <h6>Zip</h6>
                                                                                <div class="input-item">
                                                                                    <input type="text" placeholder="Zip">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p>
                                                                        <h6>Order Notes (optional)</h6>
                                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                                            <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                                        </div>
                                    
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="ltn__checkout-payment-method mt-50">
                                                            <h4 class="title-2">Payment Method</h4>
                                                            <div id="checkout_accordion_1">
                                                                <!-- card -->
                                                                <div class="card">
                                                                    <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-1" aria-expanded="false">
                                                                        Check payments
                                                                    </h5>
                                                                    <div id="faq-item-2-1" class="collapse" data-parent="#checkout_accordion_1">
                                                                        <div class="card-body">
                                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- card -->
                                                                <div class="card">
                                                                    <h5 class="ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-2" aria-expanded="true"> 
                                                                        Cash on delivery 
                                                                    </h5>
                                                                    <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                                                                        <div class="card-body">
                                                                            <p>Pay with cash upon delivery.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>                          
                                                                <!-- card -->
                                                                <div class="card">
                                                                    <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-3" aria-expanded="false" >
                                                                        PayPal <img src="img/icons/payment-3.png" alt="#">
                                                                    </h5>
                                                                    <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                                                                        <div class="card-body">
                                                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ltn__payment-note mt-30 mb-30">
                                                                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                            </div>
                                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="shoping-cart-total mt-50">
                                                            <h4 class="title-2">Cart Totals</h4>
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>3 Rooms Manhattan <strong>× 2</strong></td>
                                                                        <td>$298.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>OE Replica Wheels <strong>× 2</strong></td>
                                                                        <td>$170.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Wheel Bearing Retainer <strong>× 2</strong></td>
                                                                        <td>$150.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Shipping and Handing</td>
                                                                        <td>$15.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Vat</td>
                                                                        <td>$00.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Order Total</strong></td>
                                                                        <td><strong>$633.00</strong></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ltn_tab_1_9">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="account-login-inner">
                                                    <form action="#" class="ltn__form-box contact-form-box">
                                                        <h5 class="mb-30">Change Password</h5>
                                                        <input type="password" name="password" placeholder="Current Password*">
                                                        <input type="password" name="password" placeholder="New Password*">
                                                        <input type="password" name="password" placeholder="Confirm New Password*">
                                                        <div class="btn-wrapper mt-0">
                                                            <button class="theme-btn-1 btn btn-block" type="submit">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
    @endsection