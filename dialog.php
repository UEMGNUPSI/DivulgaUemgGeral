<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link href="../dist/attention.css" rel="stylesheet">
        <style>

        
        .intro {
            position: relative;
            text-align: center;
            padding: 100px 20px;
        }
        .examples {
            position: relative;
            text-align: center;
            padding: 0 20px;
        }
        .examples .button {
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
        }
        .examples .new-alert {
            background-color: #143642;
        }
        .examples .new-prompt {
            background-color: #EC9A29;
        }
        .examples .new-confirm {
            background-color: #A8201A;
        }

        </style>
    </head>
    <body>

        <script src="../dist/attention.js"></script>

    
        <div class="examples">

          <button class="button new-alert "> 
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"><?php echo $total; ?></span>          
          </button>
        </div>

        <script>

            const demo = document.querySelector('.demo');

            document.querySelector('.new-alert').addEventListener('click', function() {
                new Attention.Alert({
                    title: 'Nice alert!',
                    content: 'This is my content',
                    afterClose: () => {
                        demo.innerHTML += '<h4>Alert was closed</h4>';
                    }
                });
            });

           
        </script>

    </body>
</html>
