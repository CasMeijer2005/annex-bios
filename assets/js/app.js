function createComboBoxFromJson(params) 
{
    const select = document.createElement('select');
    const label = document.createElement('label');
    const parent = params.parent;
    const options = params.options;

    label.for = params.label.for;
    label.innerHTML = params.label.innerHTML;

    select.name = params.name;
    select.id = params.id;
    select.addEventListener('change', function(event) {
        console.log(event.target.value);
    });

    fetch('/src/assets/json/movies.json')
        .then(respone => {
            return respone.json();
        })
        .then(data => {
            const options = data.options;
            for (let i=0; i<options.length; i++) {
                const option = document.createElement('option');
                option.value = options[i];
                option.innerHTML = options[i]
                select.append(option);
            }
        })

    parent.append(label);
    parent.append(select);
}

createComboBoxFromJson( {
    name: 'film',
    id: 'film', 
    parent:document.getElementById('dynamische_combo_json'),
    json:'movies.json',
    label:{for: 'film', innerHTML:'Kies je film:'}
} );

/*

*/