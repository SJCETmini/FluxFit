
<?php
include '../layout/userLayout.php';
include '../partials/user-nav.php';
include '../partials/user-sidebar.php';
include '../../config.php';
?>

<section id="content">
    <main>
        <div class="membership-card-section">
            <div class="container-fluid">

                {{#each response}}

                <div class="row ticket mb-5">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="stub">
                            <div class="top">
                                <span class="admit">Membership</span>
                                <span class="line"></span>
                                <span class="num">
                                    <span>{{gymname}}</span>
                                </span>
                            </div>
                            <div class="text-center"><i class="fa-solid fa-dumbbell mt-3"></i></div>
                            <div class="invite">
                                FLEX IT UP
                            </div>
                        </div>
                    </div>
                    <div class="check">
                        <div>
                            Card id :
                        </div>
                        <div class="number">
                            <div class="big">{{membershipid}}</div>
                        </div>
                        <div class="info row">
                            <section class="col-md-6">
                                <div class="title">Name</div>
                                <div>{{username}}</div>
                            </section>
                            <section class="col-md-6">
                                <div class="title">Validity</div>
                                <div>{{formattedisdate}} - {{formattedexdate}}</div>
                            </section>
                            <section class="col-md-6">
                                <div class="title">Cost</div>
                                <div>{{price}}</div>
                            </section>
                            <section class="col-md-6">
                                <div class="title">Status</div>
                                <div class="status {{#if expired}}active{{else}}expired{{/if}}">{{#if expired}}Active{{else}}Expired{{/if}}</div>
                            </section>
                        </div>
                    </div>
                </div>

                {{/each}}
            </div>
        </div>
    </main>
</section>