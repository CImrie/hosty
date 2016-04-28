<div style="display:flex; align-items:center;">
    <form class="form jumbotron">
        <div class="form-group">
            <label for="url">URL:</label>
            <input type="text" name="url" class="form-control" placeholder="http://example.com" value="<?php echo isset($_GET['url']) ? $_GET['url']:''; ?>"/>
        </div>
        <div class="form-group">
            <label for="ip">Using IP Address:</label>
            <input type="text" name="ip" class="form-control" placeholder="127.0.0.1" value="<?php echo isset($_GET['ip']) ? $_GET['ip']:''; ?>"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Go
            </button>
        </div>
    </form>
</div>