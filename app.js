var cnlVersion = '0.0.3';
$( document ).ready(function() {
    // searches for substrings in a query
    var substringMatcher = function(strs) {
          return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                      if (substrRegex.test(str)) {
                        matches.push(str);
                      }
                });

                cb(matches);
          };
    };
    
    var getMeta = function(url){
        return $.ajax({
            dataType: "json",
            url: url,
            data: data,
            success: success
        });
    }
    
    console.log(getMeta('https://gist.githubusercontent.com/xolf/2fc9efcd1b979d979ae4/raw/1be89cddb2304c1705dfab7ce37bd2963661db10/names.json'));

    // https://github.com/xolf/Code-Bowl/blob/master/names.js

    var names = [
        'Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Miller',
        'Davis', 'Garcia', 'Rodriguez', 'Wilson', 'Martinez', 'Anderson',
        'Tylor', 'Thomas', 'Hernandez', 'Moore', 'Martin', 'Jackson',
        'Thompson', 'White', 'Lopez', 'Lee', 'Gonzalez', 'Harris', 'Clark',
        'Lewis',  'Robinson', 'Walker', 'Perez', 'Hall', 'Young', 'Allen',
        'Sanchez', 'Wright', 'King', 'Scott', 'Green', 'Baker', 'Adams',
        'Nelson', 'Hill', 'Ramirez', 'Campbell', 'Mitchell', 'Roberts',
        'Carter',  'Phillips',  'Evans', 'Turner', 'Torrs', 'Parker', 'Collins',
        'Edwards', 'Stewart', 'Flores', 'Morris', 'Nguyen', 'Murphy', 'Rivera',
        'Cook', 'Rogers', 'Morgan', 'Peterson', 'Cooper', 'Reed', 'Bailey'
    ];

    $('.typeahead').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    },
    {
        name: 'names',
        source: substringMatcher(names)
    });

    // console loaded
    while(i > 50){
        console.log(' ');
        i++;
    }
    console.log( 'Luckdrum console v' + cnlVersion + ' loaded successfully' );
    console.log( '! ! ! Never insert some code you dont know about ! ! ! ');
});
