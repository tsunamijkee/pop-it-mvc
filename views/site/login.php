<h2 class="text-center"> Авторизация </h2>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):?>
<section class="vh-100 bg-image"
         style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body bg-secondary p-5">
                            <form method="post">
                                <div class="form-outline mb-4">
                                    <input type="login" id="form3Example1cg" name="login" placeholder="Логин" class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example3cg" name="password" placeholder="Пароль" class="form-control form-control-lg" />
                                </div>
                                <div class="form-check d-flex justify-content-center mb-5">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                                class="btn bg-light btn-block btn-lg gradient-custom-4 text-body">Подтвердить вход</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif;
?>
</section>

<h3><?= $message ?? ''; ?></h3>
