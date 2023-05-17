<?php
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

$body = \FortisAPILib\Models\Builders\V1ElementsTransactionIntentionRequestBuilder::init()
  ->amount(1099)
  ->build();

$elementsController = $client->getElementsController();
$result = $elementsController->transactionIntention($body);
$res = $result->getData();

?>

<head>
  <title>Checkout</title>
  <script src="https://js.sandbox.fortis.tech/commercejs-v1.0.0.min.js"></script>
</head>
<div id="payment">
</div>
<script>
  var elements = new Commerce.elements('<?= $res->getClientToken() ?>');
  elements.create({
    container: '#payment',
    theme: 'default'
  });

  elements.on('done', (result) => {
    console.log("done");
    console.log(result.data.cvv_response);
    console.log(result.data);
  });

  elements.on('submitted', function (event) {
    console.log("submitted");
    //Form submitted
  });

  elements.on('validationError', function (event) {
    console.log("validation error");
    //Some input fields are empty or don't have the right validation
  });

  elements.on('error', (error) => {
    console.log("error");
  });
</script>