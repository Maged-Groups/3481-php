<style>
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border: solid 2px #333;
        max-width: 300px;
        display: inline-flex;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* Add some padding inside the card container */
    .container {
        padding: 2px 16px;
    }
</style>

<div class="card">
    <div class="container">
        <h4><b><?= $user; ?></b></h4>
    </div>
</div>