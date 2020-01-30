<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
        function fetch(i){
            var get = "get";
            var put = "put";
            var str2 = i;
            var res = get.concat(str2);
            var res2 = put.concat(str2);
            var get = document.getElementById(res).value;
            document.getElementById(res2).value = get;
        }
    </script>
  </head>
  <body>
