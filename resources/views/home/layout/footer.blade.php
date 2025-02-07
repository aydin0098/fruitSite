<footer class="footer-parent pt-4 pb-4">
    <div class="container footer-wrap">

        <div class="row py-3">

            <div class="col-lg-5 col-md-6 col-sm-12 px-md-3 mb-4 pl-lg-5">
                <div class="d-flex align-items-center mb-4">

                    <h2 class="mr-3 color-white">راه های ارتباطی</h2>
                </div>
                <div class="mb-2 text-right">

                    <div class="d-flex align-items-center my-3">
                        <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3334 11.0006C14.3334 9.15894 12.8411 7.66663 11.0008 7.66663C9.15906 7.66663 7.66675 9.15894 7.66675 11.0006C7.66675 12.841 9.15906 14.3333 11.0008 14.3333C12.8411 14.3333 14.3334 12.841 14.3334 11.0006Z" stroke="#FFB500" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9993 25C9.40138 25 1 18.1978 1 11.0844C1 5.51552 5.47613 1 10.9993 1C16.5226 1 21 5.51552 21 11.0844C21 18.1978 12.5973 25 10.9993 25Z" stroke="#FFB500" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="mr-2">آدرس  : {{$setting['address']}}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center my-3">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.353 1C17.054 1.411 19.978 4.331 20.393 8.032" stroke="#FFB500" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.353 4.54297C15.124 4.88697 16.508 6.27197 16.853 8.04297" stroke="#FFB500" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0315 10.9724C14.0205 14.9604 14.9254 10.3467 17.4653 12.8848C19.9138 15.3328 21.3222 15.8232 18.2188 18.9247C17.8302 19.237 15.3613 22.9943 6.68447 14.3197C-1.99341 5.644 1.76157 3.17244 2.07394 2.78395C5.18377 -0.326154 5.66682 1.08938 8.11539 3.53733C10.6541 6.0765 6.04254 6.98441 10.0315 10.9724Z" stroke="#FFB500" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <p class="mr-2">{{$setting['phone']}}</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="d-flex align-items-center mb-4">

                    <h2 class="mr-3 color-white">پیوندها</h2>
                </div>
                <ul class="footer-category text-center">
                    <li>
                        <a href="{{route('home')}}">صفحه اصلی</a>
                    </li>
                    <li>
                        <a href="{{route('about.us')}}">درباره ما</a>
                    </li>
                    <li>
                        <a href="{{route('product.all')}}">محصولات</a>
                    </li>
                    <li>
                        <a href="{{route('contact.us')}}">تماس با ما</a>
                    </li>



                </ul>
            </div>

            <div class="col-lg-4 col-md-6  col-sm-12 mb-4">
                <div class="d-flex align-items-center mb-4">
                    <h2 class="mr-3 color-white">ساعت کاری</h2>
                </div>
                <div class=" mb-2 text-right">

                    <div class="bg-clock p-4 radius30">
                        <div class="clock-pet px-3 py-2">
                            <p>{{$setting['work_day']}}</p>
                            <p>{{$setting['work_time']}}</p>
                        </div>
                    </div>

                </div>
            </div>


        </div>


        <div class="d-flex align-items-center justify-content-between copyright py-3 px-5 radius30">
            <div class="media-icone d-flex align-items-center">
                <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.6403 35.073H14.3903C6.01905 35.073 2.44238 31.4963 2.44238 23.125V13.875C2.44238 5.50379 6.01905 1.92712 14.3903 1.92712H23.6403C32.0115 1.92712 35.5882 5.50379 35.5882 13.875V23.125C35.5882 31.4963 32.0115 35.073 23.6403 35.073ZM14.3903 4.23962C7.28322 4.23962 4.75488 6.76796 4.75488 13.875V23.125C4.75488 30.2321 7.28322 32.7605 14.3903 32.7605H23.6403C30.7474 32.7605 33.2757 30.2321 33.2757 23.125V13.875C33.2757 6.76796 30.7474 4.23962 23.6403 4.23962H14.3903Z" fill="white" stroke="white" stroke-width="0.5"/>
                    <path d="M19.0155 25.052C15.408 25.052 12.4634 22.1075 12.4634 18.5C12.4634 14.8925 15.408 11.9479 19.0155 11.9479C22.623 11.9479 25.5675 14.8925 25.5675 18.5C25.5675 22.1075 22.623 25.052 19.0155 25.052ZM19.0155 14.2604C16.6721 14.2604 14.7759 16.1566 14.7759 18.5C14.7759 20.8433 16.6721 22.7395 19.0155 22.7395C21.3588 22.7395 23.255 20.8433 23.255 18.5C23.255 16.1566 21.3588 14.2604 19.0155 14.2604Z" fill="white" stroke="white" stroke-width="0.5"/>
                    <path d="M26.7238 11.5625C26.5234 11.5625 26.323 11.5162 26.138 11.4391C25.953 11.3621 25.7834 11.2541 25.6292 11.1154C25.4905 10.9612 25.3671 10.7916 25.29 10.6066C25.213 10.4216 25.1821 10.2212 25.1821 10.0208C25.1821 9.82039 25.213 9.61997 25.29 9.43497C25.3825 9.23456 25.4905 9.08039 25.6292 8.92622C25.7063 8.86456 25.7834 8.78747 25.8605 8.74122C25.953 8.67956 26.0455 8.63331 26.138 8.60247C26.2305 8.55622 26.323 8.52539 26.4309 8.50997C26.9242 8.40206 27.4484 8.57164 27.8184 8.92622C27.9571 9.08039 28.065 9.23456 28.1421 9.43497C28.2192 9.61997 28.2655 9.82039 28.2655 10.0208C28.2655 10.2212 28.2192 10.4216 28.1421 10.6066C28.065 10.7916 27.9571 10.9612 27.8184 11.1154C27.6642 11.2541 27.4946 11.3621 27.3096 11.4391C27.1246 11.5162 26.9242 11.5625 26.7238 11.5625Z" fill="white" stroke="white" stroke-width="0.5"/>
                </svg>
            </div>

            <div class="">
                <p class="text-center fa14">کلیه حقوق مادی و معنوی این قالب برای توسعه دهندگان آن محفوظ بوده و هرگونه کپی برداری، پیگرد قانونی دارد.</p>
            </div>


        </div>

    </div>

</footer>
