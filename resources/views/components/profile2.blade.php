<!-- @props(['users'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile2</title>
</head>
<body>

@forelse($users as $user)

<div class="col-md-3 mb-3 mt-4" style="margin: 0 auto;">
    <x-profile :user="$user" />
</div>

@empty 

<p>Empty</p>

@endforelse
    
</body>
</html> -->