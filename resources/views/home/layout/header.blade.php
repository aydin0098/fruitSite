<header class="main_header wide_header">
    <div class="header_container">
        <div class="menu_wrapper menu_sticky header-btop">
            <div class="container p_relative h86">

                <div id="navigation" class="of-drop-down of-main-menu" role="navigation">
                    <ul class="menu">
                        <li>
                            <a href="{{route('home')}}" class="current py-2">
                                <img width="70px" src="{{asset('front/logo.png')}}" />
                            </a>
                        </li>
                        <li><a href="{{route('home')}}" target="_blank">صفحه اصلی</a></li>

                        <li><a href="{{route('product.all')}}" target="_blank">محصولات</a></li>

                        <li><a href="{{route('catalogs')}}" target="_blank">کاتالوگ ها</a></li>


                        <li><a href="{{route('about.us')}}" target="_blank">درباره ما</a></li>
                        <li><a href="{{route('contact.us')}}" target="_blank">تماس با ما</a></li>
                    </ul>
                </div>

                <div class="m_login d-flex">
                    <div class="login px-4 py-2 radius55 d-flex align-items-center">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4399 19.05L15.9599 20.57L18.9999 17.53" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.1601 10.87C12.0601 10.86 11.9401 10.86 11.8301 10.87C9.4501 10.79 7.5601 8.84 7.5601 6.44C7.5501 3.99 9.5401 2 11.9901 2C14.4401 2 16.4301 3.99 16.4301 6.44C16.4301 8.84 14.5301 10.79 12.1601 10.87Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.99 21.8099C10.17 21.8099 8.36004 21.3499 6.98004 20.4299C4.56004 18.8099 4.56004 16.1699 6.98004 14.5599C9.73004 12.7199 14.24 12.7199 16.99 14.5599" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a class="mr-2" href="login.html">ثبت نام | ورود</a>
                    </div>
                </div>

                <div class="is-show mobile-nav-button">
                    <a id="of-trigger" class="icon-wrap" href="#">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5401 8.81063C19.1748 8.81063 20.5001 7.48539 20.5001 5.85062C20.5001 4.21586 19.1748 2.89062 17.5401 2.89062C15.9053 2.89062 14.5801 4.21586 14.5801 5.85062C14.5801 7.48539 15.9053 8.81063 17.5401 8.81063Z" fill="#292D32"/>
                            <path d="M6.46 8.81063C8.09476 8.81063 9.42 7.48539 9.42 5.85062C9.42 4.21586 8.09476 2.89062 6.46 2.89062C4.82524 2.89062 3.5 4.21586 3.5 5.85062C3.5 7.48539 4.82524 8.81063 6.46 8.81063Z" fill="#292D32"/>
                            <path d="M17.5401 21.1095C19.1748 21.1095 20.5001 19.7842 20.5001 18.1495C20.5001 16.5147 19.1748 15.1895 17.5401 15.1895C15.9053 15.1895 14.5801 16.5147 14.5801 18.1495C14.5801 19.7842 15.9053 21.1095 17.5401 21.1095Z" fill="#292D32"/>
                            <path d="M6.46 21.1095C8.09476 21.1095 9.42 19.7842 9.42 18.1495C9.42 16.5147 8.09476 15.1895 6.46 15.1895C4.82524 15.1895 3.5 16.5147 3.5 18.1495C3.5 19.7842 4.82524 21.1095 6.46 21.1095Z" fill="#292D32"/>
                        </svg>
                    </a>
                </div>

                <div class="logo-mobile d-none">
                    <a href="Index.html" class="current py-2">
                        <img src="{{asset('front/Img/logo.svg')}}" />
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>
