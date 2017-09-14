<?php snippet('head') ?>
<body>
<div class="layout">
    <?php snippet('header') ?>
    <div class="content">
        <div class="article">
            <h1><?php echo $page->title()->html() ?></h1>

            <?php if($error): ?>
                <div class="alert"><?php echo $page->alert()->html() ?></div>
            <?php endif ?>


            <form method="post">
                <fieldset>
                    <input type="hidden" name="csrf" value="<?php echo csrf() ?>">

                    <label for="email">Email</label>
                    <input class="input" type="email" placeholder="Email" required>

                    <label for="password">Password</label>
                    <input class="input" type="password" placeholder="Password" required>

                    <button type="submit" class="pure-button pure-button-primary"><?php echo $page->button()->html() ?></button>

                </fieldset>
            </form>

        </div>


        <?php snippet('footer') ?>
    </div>
</div>
</body>
</html>
