

function FiftyFitfyJoker()
{

    let QuestionNumber = document.getElementById('questNum').innerHTML;

    var AnswersToRemove = new Array ( );

    AnswersToRemove[1] = new Array (

    'Digital wallet',
    'Mining'
    )

    AnswersToRemove[2] = new Array (

    'Print a file from the cloud',
    'Delete a cloud service account'

    )
    AnswersToRemove[3] = new Array (
        
        ''

    )

    AnswersToRemove[4] = new Array (

        'USA',
        'China'
    )

    AnswersToRemove[5] = new Array (

        ''
        
    )

    AnswersToRemove[6] = new Array (

        'Substitute for postal addresses (Japan Post)',
        'Encryption of prescriptions in pharmacies'
    )

    AnswersToRemove[7] = new Array (
        'Barrier-free, with Braille on the keys, for the blind',
        'configured as a remote control for TV and garage to save space',

    )

    AnswersToRemove[8] = new Array (
        '1995',
        '2000'
       

    )

    AnswersToRemove[9] = new Array (
        
        'Bug',
        'Code'

    )

    AnswersToRemove[10] = new Array (

        ''
        
    )

    AnswersToRemove[11] = new Array (
        
        'Program',
        'Code'

    )

    AnswersToRemove[12] = new Array (
        'Property',
        'Program'

    )

    AnswersToRemove[13] = new Array (
        'Function',
        'Loop'

    )

    AnswersToRemove[14] = new Array (
        'Command',
        'Code'

    )

    AnswersToRemove[15] = new Array (

        ''
        
    )

    AnswersToRemove[16] = new Array (
        
        'Variable',
        'Programming'

    )

    AnswersToRemove[17] = new Array (
        'Function',
        'Loop'

    )

    AnswersToRemove[18] = new Array (
        'Program',
        'Sprite'

    )

    AnswersToRemove[19] = new Array (
        'Bill Gates'

    )

    AnswersToRemove[20] = new Array (

        ''
        
    )

    AnswersToRemove[21] = new Array (
        
        '$a_Variable = 9;',
        '$AVariable;'

    )

    AnswersToRemove[22] = new Array (
        '26',
        '139'

    )

    AnswersToRemove[23] = new Array (
        'Eriac',
        'Nasa'

    )

    AnswersToRemove[24] = new Array (
        'Firefox',
        'DuckDuckGo'

    )

    AnswersToRemove[25] = new Array (
        'Apple II',
        'IBM PC (5150)'

    )

    AnswersToRemove[26] = new Array (
        '1960',
        '1974'

    )

    AnswersToRemove[27] = new Array (
        'Matlab',
        'ADA'

    )

    AnswersToRemove[28] = new Array (
        'Motorolla 7500',
        'Blackberry 850'

    )

    AnswersToRemove[29] = new Array (
        'A rusty bucket',
        'A Jurassic Park T-shirt'

    )

    /*

    

    currentJokerQuestion.forEach(element => {

        let element = document.getElementById(currentJokerQuestion[]);

        element.parentNode.removeChild(element);
        
    });

    */

    let currentJokerQuestion = AnswersToRemove[QuestionNumber];

    //document.write(QuestionNumber + currentJokerQuestion);

    for (let index = 0; index < currentJokerQuestion.length; index++) {

        let element = document.getElementById(currentJokerQuestion[index]);

        element.parentNode.removeChild(element);
        
    }


   


}






