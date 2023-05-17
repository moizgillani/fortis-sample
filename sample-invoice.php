<?php

if (isset($_POST['email'])) {

    require_once "vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client = \FortisAPILib\FortisAPIClientBuilder::init()
        ->userId($_ENV['USER_ID'])
        ->userApiKey($_ENV['USER_API_KEY'])
        ->developerId($_ENV['DEVELOPER_ID'])
        ->environment($_ENV['ENVIRONMENT'])
        ->build();

    $builder = $client->toBuilder();


    $body = \FortisAPILib\Models\Builders\V1QuickInvoicesRequestBuilder::init(
        'Invoice For Package Purchase',
        '2023-06-18',
        [
            \FortisAPILib\Models\Builders\ItemListBuilder::init(
                $_POST['package'],
                $_POST['price'] * 100
            )->build()
        ]
    )
        ->locationId('11ed198dc48f8e5a90e119a4')
        ->allowOverpayment(true)
        ->bankFundedOnlyOverride(true)
        ->email($_POST['email'])
        ->allowPartialPay(false)
        ->attachFilesToEmail(false)
        ->sendEmail(true)
        ->invoiceNumber('000016')
        ->itemHeader('Your Purchases')
        ->itemFooter('Thank you for purchasing')
        ->notificationEmail($_POST['email'])
        ->note('this is a sample note')
        ->notificationOnDueDate(true)
        ->sendTextToPay(false)
        ->build();

    $quickInvoicesController = $client->getQuickInvoicesController();
    $result = $quickInvoicesController->createANewQuickInvoice($body);

}

?>

<head>
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://js.sandbox.fortis.tech/commercejs-v1.0.0.min.js"></script>
</head>
<div class="container py-3">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                    role="img">
                    <title>Bootstrap</title>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                        fill="currentColor"></path>
                </svg>
                <span class="fs-4">Invoice example</span>
            </a>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Packages Pricing</h1>
            <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers
                with this Bootstrap example. It’s built with default Bootstrap components and utilities with little
                customization.</p>
        </div>
    </header>
    <?php
    if (isset($_POST['email'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You Invoice has been sent to the email provided.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    ?>

    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Silver</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$10<small
                                class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-price="10" data-bs-name="Silver">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Gold</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small
                                class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-price="15" data-bs-name="Gold">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Platinum</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small
                                class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-price="29" data-bs-name="Platinum">Get
                            started</button>
                    </div>
                </div>
            </div>
        </div>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="sample-invoice.php" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Buy Subscription</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Package:</label>
                        <input type="text" class="form-control" name="package" id="package-name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Price:</label>
                        <input type="number" class="form-control" name="price" id="package-price" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Invoice</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    const exampleModal = document.getElementById('exampleModal')
    if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const name = button.getAttribute('data-bs-name')
            const price = button.getAttribute('data-bs-price')
            const modalName = exampleModal.querySelector('#package-name')
            const modalPrice = exampleModal.querySelector('#package-price')

            modalName.value = `${name}`
            modalPrice.value = `${price}`
        })
    }
</script>