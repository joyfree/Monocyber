    <div class="container">
         
        <div class="row clear_fix">
            <div class="col-md-12">
                 
                <blockquote style="background: #333; color: #fff">
                <h3>Rich text editor in codeigniter</h3>
                <a href="<a class="vglnk" href="http://www.facebook.com/pariharvikram1989" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>facebook</span><span>.</span><span>com</span><span>/</span><span>pariharvikram1989</span></a>"><cite>By: Vikram Parihar</cite></a>
            </blockquote>
             
            </div>
        </div>
         
        <div class="row clear_fix">
             
            <div class="col-md-12">
                <form role="form" id="frmArticle" class="form" action="<?php echo base_url() ?>home/addArticle" method="POST">
                    <lablel>Title</lablel>
                    <input type="text" name="title" class="form-control">
                    <lablel>Content</lablel>
                    <textarea id="article" name="article" rows="8" class="form-control"></textarea>
                    <input class="btn btn-info btn-block" type="submit" value="Add new article" name="submit">
                </form>
                 
            </div>
             
        </div>
         
         
        <div class="row clear_fix">
             
            <div class="col-md-12 response">
            </div>
             
        </div>
         
    </div>
 
    <script>
    $(document).ready(function(){
        loadArticle();
        $("#frmArticle").submit(function (e){
            e.preventDefault();
            tinymce.triggerSave();
            var data = $(this).serialize();
            var type = $(this).attr('method');
            var url = $(this).attr('action');
            console.log(data);
             
            $.ajax({
                url:url,
                type: type,
                data: data
            }).done(function (html){
                $('#frmArticle')[0].reset();
                loadArticle();
            });
        });
    });
     
    function loadArticle(){
        $.ajax({
                url:'<?php echo base_url() ?>home/loadArticle',
                type: 'GET'
            }).done(function (html){
                $(".response").html(html);
            });
    };
    </script>
