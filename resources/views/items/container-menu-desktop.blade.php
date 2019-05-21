<!-- Header desktop -->
<div class="container-menu-desktop">
    <!-- Topbar -->
    <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full container">
            <div class="left-top-bar">

                Добро пожаловать
                @php
                    if (Auth::check())
                        {
                            $prava =  Auth::user()->role_id;
                            if ($prava==1){
                                echo 'вы администратор';
                                //echo $some;
                            }
                        }
                @endphp


            </div>

            <div class="right-top-bar flex-w h-full">




                <a href="#" class="flex-c-m trans-04 p-lr-25">
                    EN
                </a>

                <a href="#" class="flex-c-m trans-04 p-lr-25">
                    USD
                </a>
            </div>
        </div>
    </div>


</div>
