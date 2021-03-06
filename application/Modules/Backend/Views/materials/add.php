<div class="ui container">
    <div class="container">
        <div class="ui grid">
            <?php $this->loadView('_templates/sidebar.php'); ?>

            <div class="twelve wide column">
                <div class="pageHeader">
                    <div class="segment">
                        <h3 class="ui dividing header">
                            <i class="large file video outline icon"></i>
                            <div class="content">
                                <?php echo $this->text("MATERIALS"); ?>
                            </div>
                        </h3>
                    </div>
                </div>

                <div class="ui fluid vertical segment">
                    <?php $this->renderFeedbackMessages(); ?>
                    <?php echo $this->form()->open("materials", $this->route(["action" => "save", "params" => [$this->get("id", 0)]]), ["class" => "ui large form", "enctype" => "multipart/form-data"]); ?>
                    <div class="field">
                        <div class="field">
                            <label><?php echo $this->text("TITLE"); ?></label>
                            <div class="ui small left labeled icon input">
                                <input type="text" placeholder="<?php echo $this->text("TITLE"); ?>" id="title"
                                       name="title" value="<?php echo $this->form()->valueOf("title"); ?>"/>
                            </div>
                        </div>
                    </div>

                    <?php if ($this->get("id", 0) == 0) { ?>
                        <?php
                        switch ($this->get("type")) {
                            case 1:
                                ?>
                                <div class="field">
                                    <label><?php echo $this->text("FILE"); ?></label>
                                    <input type="file" name="file"/>
                                </div>
                                <?php
                                break;
                            case 2:
                                ?>
                                <div class="field">
                                    <label><?php echo $this->text("VIDEO_LINK"); ?></label>
                                    <div class="ui left action input">
                                        <select name="provider" class="ui compact selection dropdown">
                                            <option selected value="youtube">YouTube</option>
                                        </select>
                                        <input name="link" type="url" placeholder="http://">
                                    </div>
                                </div>
                                <?php
                                break;
                        }
                        ?>
                    <?php } ?>

                    <input type="hidden" name="type" value="<?php echo $this->get("type", 1); ?>">

                    <input type="hidden" name="course_id" value="<?php echo $this->get("course_id", 0); ?>">
                    <input type="hidden" name="section_id" value="<?php echo $this->get("section_id", 0); ?>">

                    <input type="hidden" name="back"
                           value="<?php echo $this->route(["action" => $this->action, "params" => $this->params]); ?>">

                    <input class="ui small blue submit button" type="submit" value="<?php echo $this->text("SAVE"); ?>">
                    <?php echo $this->form()->close(); ?>

                </div>

            </div>
        </div>
    </div>
</div>