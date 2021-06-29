@extends('layouts.master')

@section('banner')
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Rent a car at low prices</h1>
            </header>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, libero!</p>
                <ul class="actions">
                    <li><a href="#one" class="button next scrolly">Select a Car</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('main_content')
    <div id="main">

        <!-- One -->
            <section id="one" class="tiles">
                <article>
                    <span class="image">
                        <img src="images/image-1.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Large: Premium</h3>

                        <p>PRICE FROM: <strong>$ 140.00</strong></p>

                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Book now</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-2.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Large: Station wagon</h3>
                        <p>PRICE FROM: <strong>$ 120.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Book now</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-3.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Medium: Low emission</h3>
                        <p>PRICE FROM: <strong>$ 75.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Book now</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-4.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Small: Economy</h3>
                        <p>PRICE FROM: <strong>$ 65.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Book now</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-5.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Small: Mini</h3>
                        <p>PRICE FROM: <strong>$ 55.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Book now</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-6.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Small: Mini Low emission</h3>
                        <p>PRICE FROM: <strong>$ 49.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Book now</a>
                        </div>
                    </header>
                </article>
            </section>

        <!-- Two -->
            <section id="two">
                <div class="inner">
                    <header class="major">
                        <h2>About us</h2>
                    </header>
                    <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
                    <ul class="actions">
                        <li><a href="about.php" class="button next">Read more</a></li>
                    </ul>
                </div>
            </section>

    </div>
@endsection

@section('content')
    <section id="contact">
        <div class="inner">
            <section>
                <header class="major">
                    <h2>Book now</h2>
                </header>

                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" />
                        </div>

                        <div class="field half">
                            <label for="vehicle-type">Select Vehicle Type</label>

                            <select name="vehicle-type" id="vehicle-type">
                                <option value="">- Vehicle Type -</option>
                                <option value="1">Large: Premium</option>
                                <option value="2">Large: Station wagon</option>
                                <option value="3">Medium: Low emission</option>
                                <option value="4">Small: Economy</option>
                                <option value="5">Small: Mini</option>
                                <option value="6">Small: Mini Low emission</option>
                            </select>
                        </div>

                        <div class="field half">
                            <label for="date-from">Date from</label>
                            <input type="text" name="date-from" id="date-from" />
                        </div>

                        <div class="field half">
                            <label for="date-to">Date to</label>
                            <input type="text" name="date-to" id="date-to" />
                        </div>

                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>

                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>

                        <div class="field half">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" />
                        </div>

                        <div class="field">
                            <label for="message">Comment</label>
                            <textarea name="message" id="message" rows="3"></textarea>
                        </div>

                        <div class="field half">
                            <label for="captcha">Captcha</label>
                            <input type="text" name="captcha" id="captcha" />
                        </div>

                        <div class="field half text-right">
                            <label>&nbsp;</label>

                            <ul class="actions">
                                <li><input type="submit" value="Send" class="primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
            <section class="split">
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-envelope"></span>
                        <h3>Email</h3>
                        <a href="#">carrentalwebsite@untitled.tld</a>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-phone"></span>
                        <h3>Phone</h3>
                        <span>(000) 000-0000 x12387</span>
                        <br>
                        <span>(000) 000-0000 x12387</span>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-home"></span>
                        <h3>Address</h3>
                        <span>1234 Somewhere Road #5432<br />
                        Nashville, TN 00000<br />
                        United States of America</span>
                    </div>
                </section>
                <section>
                    <h3>Terms</h3>

                    <div class="box">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam quasi molestiae quo repudiandae repellat dolore impedit alias soluta, excepturi aperiam aliquid numquam dignissimos nulla exercitationem vel, fuga accusamus voluptate, ipsa quia. Possimus odit ipsam deleniti nisi soluta voluptas! Nemo aperiam dignissimos, nisi. Necessitatibus cum quos dolor incidunt! Ab voluptatum sapiente voluptas fuga in rem voluptatibus rerum ipsam eos dolorem aspernatur saepe incidunt provident nihil, quos ad perspiciatis est voluptatem commodi. Repellat dolores, ipsam facere ipsum, cumque deleniti perferendis delectus consequatur harum fuga et architecto vitae neque suscipit. Aut vero architecto non maxime molestiae autem dolores, corporis, molestias esse voluptatum nobis error minima deserunt provident consectetur. Qui, ipsa assumenda voluptatum asperiores laudantium nobis harum sint quis sed quia, officiis odit eaque a! Quos provident eos earum facilis nam consequuntur reiciendis amet sunt? Quia, quasi sunt. Aliquam labore vitae, officiis ullam itaque. Id non est earum praesentium incidunt officia quos modi at suscipit quibusdam. Id nostrum beatae ea atque, fugiat mollitia, eius, sed eos quidem itaque inventore hic reiciendis quas doloremque illum. Enim eum labore odio alias. Consectetur molestias, suscipit, animi amet enim eius, voluptates nulla sapiente earum tenetur explicabo iusto ad officiis! Praesentium minus illo saepe voluptatibus obcaecati, excepturi, sit nam quaerat ab velit deserunt tenetur magni quae temporibus! Iusto sapiente iste eos, ipsa dolores obcaecati voluptas commodi, nesciunt officiis at quis magni quos, ducimus ad. Minus dicta blanditiis voluptatum ipsa, voluptatem sequi eligendi nam est possimus libero aliquam, eos provident repellendus dolores. Distinctio corrupti ea ipsam, dolore, dolorem similique eos illo iure ad maxime, cumque doloribus iusto expedita quidem accusantium cum, voluptatibus ducimus! Neque eos cupiditate at molestias sequi enim! Amet nesciunt dolorem quisquam sunt ad quos fugit at alias distinctio nihil nostrum, itaque a repudiandae soluta dicta quasi, repellat quidem autem. Architecto, esse porro iure repellat sed. Quidem?</p>
                    </div>
                </section>
            </section>
        </div>
    </section>
@endsection

@section('css')

@endsection

@section('js')

@endsection
