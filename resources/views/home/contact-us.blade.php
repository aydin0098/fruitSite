@extends('home.master')
@section('title','تماس با ما')
@section('content')
    <section class="container-fluid bkg p-0">
        <div class="row">
            <div class="col-lg-12 p-0 mb-3">
                <div class="bg-package d-flex align-items-center justify-content-center">
                    <div class="breadcrumb radius15">
                        <ul class="d-flex align-items-center">
                            <li><a href="#">خانه</a></li>
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#292D32"/>
                                <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#292D32"/>
                            </svg>
                            <li><a href="#" class="current">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-lg-right text-center my-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2 mb-5">
                    <img src="{{$setting['contact_us_image']}}" class="img-fluid wapp" />
                </div>
            </div>
        </div>
    </section>

    <section class="container p-md-5 p-4 mt-md-5 mt-2">
        <div class="d-flex align-items-center mb-1">
            <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.2658 0.97876C28.7008 0.97876 30.6746 4.67863 30.6746 7.81348C30.6746 10.9483 28.7008 13.489 26.2658 13.489C23.8307 13.489 21.8569 10.9479 21.8569 7.81348C21.8569 4.6791 23.8307 0.97876 26.2658 0.97876Z" fill="#FFAA00"/>
                <path d="M13.7387 0.97876C16.1737 0.97876 18.1475 4.67863 18.1475 7.81348C18.1475 10.9483 16.1737 13.489 13.7387 13.489C11.3036 13.489 9.32983 10.9479 9.32983 7.81348C9.32983 4.6791 11.3036 0.97876 13.7387 0.97876Z" fill="#FFAA00"/>
                <path d="M0.534818 17.5109C-0.500563 14.9255 -0.0464077 11.2055 2.01777 10.3819C4.08194 9.55835 6.97583 11.9425 8.01027 14.5283C9.04471 17.1142 8.20934 19.8781 6.1447 20.7017C4.08005 21.5252 1.56879 20.0967 0.534818 17.5109Z" fill="#FFAA00"/>
                <path d="M39.4698 17.5109C38.4344 20.0963 35.9241 21.5253 33.8599 20.7017C31.7957 19.8782 30.9604 17.1142 31.9943 14.5284C33.0283 11.9426 35.9227 9.55745 37.9868 10.3819C40.051 11.2064 40.5037 14.9251 39.4698 17.5109Z" fill="#FFAA00"/>
                <path d="M35.776 31.7942C35.3054 29.679 34.1759 27.7667 32.9292 25.9965C30.0075 21.85 25.329 17.6627 20.0025 17.6627C14.698 17.6627 9.99787 21.8491 7.07574 25.9965C5.82905 27.7667 4.7019 29.6766 4.22892 31.7942C3.75593 33.9119 4.01478 36.2805 5.3283 37.9991C6.64182 39.7176 9.13097 40.5816 11.0756 39.649C12.2324 39.0953 13.169 37.9789 14.4448 37.8712C15.6167 37.773 16.6521 38.5608 17.6291 39.2198C18.335 39.696 19.1869 40.1294 20.0025 40.135C20.8181 40.1294 21.6694 39.696 22.3758 39.2198C23.3529 38.5617 24.3882 37.773 25.5601 37.8712C26.836 37.9789 27.7721 39.0934 28.9293 39.649C30.874 40.5816 33.3631 39.7214 34.6766 38.001C35.9902 36.2805 36.249 33.9123 35.776 31.7942ZM24.6424 29.2432C24.0414 30.3403 23.0931 31.3063 22.2921 32.0579C21.8629 32.4609 21.4108 32.8388 20.9381 33.1899H20.9353C20.6648 33.3882 20.338 33.4951 20.0025 33.4951C19.6669 33.4951 19.3402 33.3882 19.0697 33.1899H19.0669C18.5941 32.8388 18.142 32.4609 17.7129 32.0579C16.9128 31.3058 15.9635 30.3403 15.3626 29.2432C14.866 28.3374 14.6067 27.3423 14.8637 26.3053C15.1103 25.3116 15.8953 24.4387 16.8582 24.3169C17.9717 24.1759 19.2683 24.9586 20.0025 25.8573C20.7366 24.9586 22.0332 24.1764 23.1467 24.3174C24.1096 24.4392 24.8946 25.3121 25.1413 26.3058C25.3982 27.3423 25.1389 28.3374 24.6424 29.2432Z" fill="#FFAA00"/>
            </svg>

            <h2 class="mr-3">با ما در ارتباط باشید</h2>

        </div>

        <div class="row mb-3 mt-5">
            <div class="col-lg-6 col-md-6">
                <div class="card contact-box mb-3 ">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.6482 13.3792C30.9857 6.06421 24.6049 2.77087 18.9999 2.77087C18.9999 2.77087 18.9999 2.77087 18.9841 2.77087C13.3949 2.77087 6.99824 6.04837 5.33574 13.3634C3.48324 21.5334 8.48657 28.4525 13.0149 32.8067C14.6932 34.4217 16.8466 35.2292 18.9999 35.2292C21.1532 35.2292 23.3066 34.4217 24.9691 32.8067C29.4974 28.4525 34.5007 21.5492 32.6482 13.3792ZM18.9999 21.3117C16.2449 21.3117 14.0124 19.0792 14.0124 16.3242C14.0124 13.5692 16.2449 11.3367 18.9999 11.3367C21.7549 11.3367 23.9874 13.5692 23.9874 16.3242C23.9874 19.0792 21.7549 21.3117 18.9999 21.3117Z" fill="#FFAA00"/>
                        </svg>

                    </div>
                    <h3 class="pb-2">آدرس ما:</h3>
                    <p>{{$setting['address']}}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card contact-box mb-3">
                    <div class="icon">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.4957 23.6708L14.5665 26.6C13.949 27.2175 12.9673 27.2175 12.334 26.6158C12.1598 26.4416 11.9857 26.2833 11.8115 26.1091C10.1807 24.4625 8.70817 22.7366 7.394 20.9316C6.09567 19.1266 5.05067 17.3216 4.29067 15.5325C3.5465 13.7275 3.1665 12.0016 3.1665 10.355C3.1665 9.27829 3.3565 8.24913 3.7365 7.29913C4.1165 6.33329 4.71817 5.44663 5.55734 4.65496C6.57067 3.65746 7.679 3.16663 8.85067 3.16663C9.294 3.16663 9.73734 3.26163 10.1332 3.45163C10.5448 3.64163 10.909 3.92663 11.194 4.33829L14.8673 9.51579C15.1523 9.91163 15.3582 10.2758 15.5007 10.6241C15.6432 10.9566 15.7223 11.2891 15.7223 11.59C15.7223 11.97 15.6115 12.35 15.3898 12.7141C15.184 13.0783 14.8832 13.4583 14.5032 13.8383L13.2998 15.0891C13.1257 15.2633 13.0465 15.4691 13.0465 15.7225C13.0465 15.8491 13.0623 15.96 13.094 16.0866C13.1415 16.2133 13.189 16.3083 13.2207 16.4033C13.5057 16.9258 13.9965 17.6066 14.6932 18.43C15.4057 19.2533 16.1657 20.0925 16.989 20.9316C17.1473 21.09 17.3215 21.2483 17.4798 21.4066C18.1132 22.0241 18.129 23.0375 17.4957 23.6708Z" fill="#FFAA00"/>
                                <path d="M34.786 29.0225C34.786 29.4658 34.7069 29.925 34.5485 30.3683C34.501 30.495 34.4535 30.6216 34.3902 30.7483C34.121 31.3183 33.7727 31.8566 33.3135 32.3633C32.5377 33.2183 31.6827 33.8358 30.7169 34.2316C30.701 34.2316 30.6852 34.2475 30.6694 34.2475C29.7352 34.6275 28.7219 34.8333 27.6294 34.8333C26.0144 34.8333 24.2885 34.4533 22.4677 33.6775C20.6469 32.9016 18.826 31.8566 17.021 30.5425C16.4035 30.0833 15.786 29.6241 15.2002 29.1333L20.3777 23.9558C20.821 24.2883 21.2169 24.5416 21.5494 24.7158C21.6285 24.7475 21.7235 24.795 21.8344 24.8425C21.961 24.89 22.0877 24.9058 22.2302 24.9058C22.4994 24.9058 22.7052 24.8108 22.8794 24.6366L24.0827 23.4491C24.4785 23.0533 24.8585 22.7525 25.2227 22.5625C25.5869 22.3408 25.951 22.23 26.3469 22.23C26.6477 22.23 26.9644 22.2933 27.3127 22.4358C27.661 22.5783 28.0252 22.7841 28.421 23.0533L33.6619 26.7741C34.0735 27.0591 34.3585 27.3916 34.5327 27.7875C34.691 28.1833 34.786 28.5791 34.786 29.0225Z" fill="#FFAA00"/>
                            </svg>



                        </div>
                    </div>
                    <h3 class="pb-2">تلفن تماس:</h3>

                    <p>{{$setting['phone']}}</p>
                </div>

            </div>
        </div>

    </section>
@endsection
