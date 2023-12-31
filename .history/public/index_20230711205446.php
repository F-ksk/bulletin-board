<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />
  <title>ひとこと掲示板</title>
  <link rel="stylesheet" href="./assets/main.css" />
</head>

<body>
  <div class="page-cover">
    <p class="page-title">ひとこと掲示板</p>
    <hr class="page-driver" />
    <div class="form-cover">
        <!-- 投稿内容入力フォーム -->
      <form action="/" method="post">
        <div class="form-input-title">投稿者ニックネーム</div>
        <input type="text" name="author-name" maxlength="40" value="" class="input-autor-name" />
        <div class="form-input-error"></div>
        <div class="form-input-title">投稿内容<small>(必須)</small></div>
        <textarea name="message" class="input-message"></textarea>
        <div class="form-input-error"></div>
        <input type="hidden" name="action_type" value="insert" />
        <button type="submit" class="input-submit-button">投稿する</button>
      </form>
    </div>
    <hr class="page-divider" />
      <div class="message-list-cover">
        <!-- この中に投稿された内容のリストを表示 -->
      </div>
    <hr class="page-divider" />
  </div>
</body>

</html>