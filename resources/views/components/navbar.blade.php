<div class="navbar-wrapper" x-data="{ showMobile: false, showContact: false }">



    <div class="main-navbar fg-container">
        <nav>
            <div class="brand">
                <a href="/">Financial Genie</a>
            </div>


            <div class="navigation" :class="{'mobile-nav': showMobile}">
                <ul>
                    <li>
                        <a href="/" @click="showMobile = false">Home</a>
                    </li>
                    <li>
                        <a href="#news" @click="showMobile = false">News</a>
                    </li>
                    <li>
                        <a href="#exchange" @click="showMobile = false">Exchange</a>
                    </li>
                    <li>
                        <a href="#prediction" @click="showMobile = false">Predictions</a>
                    </li>
                    <li>
                        <a href="#press" @click="showMobile = false">Press Release</a>
                    </li>

                    <li>
                        <a href="#learn" @click="showMobile = false">Learn</a>
                    </li>
                    <li>
                        <a href="#" @click="showMobile = false">About</a>
                    </li>
                    <li>
                        <a href="#" @click="showContact = true">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="menu" @click="showMobile = true">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24">
                    <path
                        d="M9 3C5.691 3 3 5.691 3 9L21 9C21 5.691 18.309 3 15 3L9 3 z M 4 11.025391C3.5838451 11.025391 3.1676795 11.146021 2.8339844 11.386719L1.9960938 11.992188L3.1660156 13.613281L4 13.009766L4.8339844 13.613281L5.0957031 13.802734L5.4199219 13.802734L5.3378906 13.775391C5.3658609 13.781855 5.3944932 13.786665 5.421875 13.794922L5.4199219 13.802734L5.4453125 13.802734C5.8234956 13.911674 6.1765044 13.911674 6.5546875 13.802734L8.5117188 13.802734L7.7070312 13.222656L8 13.009766L8.8339844 13.613281C9.5013746 14.094677 10.498625 14.094677 11.166016 13.613281L12 13.009766L12.833984 13.613281C13.501375 14.094677 14.498625 14.094677 15.166016 13.613281L16 13.009766L16.833984 13.613281C17.501375 14.094677 18.498625 14.094677 19.166016 13.613281L20 13.009766L20.833984 13.613281L22.003906 11.992188L21.166016 11.386719C20.498625 10.905323 19.501375 10.905323 18.833984 11.386719L18 11.990234L17.998047 11.990234L17.166016 11.386719C16.498625 10.905323 15.501375 10.905323 14.833984 11.386719L14 11.990234L13.998047 11.990234L13.166016 11.386719C12.498625 10.905323 11.501375 10.905323 10.833984 11.386719L10 11.990234L9.9980469 11.990234L9.1660156 11.386719C8.4986254 10.905323 7.5013746 10.905323 6.8339844 11.386719L6 11.988281L5.1660156 11.386719C4.8323205 11.146021 4.4161549 11.025391 4 11.025391 z M 3 16L3 18C3 19.654 4.346 21 6 21L18 21C19.654 21 21 19.654 21 18L21 16L3 16 z" />
                </svg>
            </div>
        </nav>
    </div>

    <div class="contact-wrapper" x-show="showContact">

        <span class="close-contact" @click="showContact = false">&times;</span>

        <div class="contact-us">
            <h1>Contact us</h1>
            <form action="">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" placeholder="Enter your name...">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" placeholder="Enter your email...">
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Type your message here..."></textarea>
                </div>

                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
