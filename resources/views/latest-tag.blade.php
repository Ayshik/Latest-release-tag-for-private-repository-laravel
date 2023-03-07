
 Private repository latest lag--
 @author Md Wali Mosnad Ayshik--
 @since 2023-03-07
<!DOCTYPE html>
<html>
<head>
  <title>Latest GitHub tag</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://rawgit.com/hippich/bower-semver/master/semver.min.js"></script>
  <script>
    const repo = 'YOUR GITHUB REPOSITORY NAME ex: Ayshik/Latest-release-tag-for-private-repository-laravel';
    const token = 'YOUR GITHUB ACCESS TOKEN';
    const apiUrl = 'https://api.github.com/repos/' + repo + '/tags';

    $(document).ready(function() {
      $.ajax({
        url: apiUrl,
        headers: {
          'Authorization': 'Token ' + token
        },
        success: function(data) {
          const versions = data.filter(tag => /^v\d+\.\d+\.\d+(-\w+(\.\w+)*)?$/.test(tag.name)).sort((a, b) => semver.rcompare(a.name, b.name));
          if (versions.length > 0) {
            $('#tag').text(versions[0].name);
          } else {
            $('#tag').text('No tags found.');
          }
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
          $('#tag').text('Error: Could not load tags.');
        }
      });
    });
  </script>
</head>
<body>
  <p>Latest tag: <span id="tag">Loading...</span></p>
</body>
</html>