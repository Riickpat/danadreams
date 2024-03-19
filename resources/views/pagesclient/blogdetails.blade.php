<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Détails du Blog</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; margin: 0; padding: 0;">

  <!-- Structure de la page de détails du blog -->
  <div class="container" style="max-width: 800px; margin: 50px auto; background-color: #fff; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); overflow: hidden;">
    <div class="blog-content" style="padding: 20px; max-width: 100%; margin: 0 auto;">
      <h1 style="font-size: 36px; margin-bottom: 20px; color: #333; text-align: center;">{{$blog->titre}}</h1>
      <p style="text-align: center; line-height: 1.8; color: #666;">Date de publication : {{$blog->created_at->format('d F Y')}}</p>
      <img src="{{asset('/articlesImages/' . $blog->image)}}" alt="Image du Blog" style="max-width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
      <p style="line-height: 1.8; color: #666;">
        {{$blog->description}}
      </p>
      <!-- Ajoute d'autres blogs de la même manière -->
    </div>
  </div>

</body>
</html>
