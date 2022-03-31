

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

        'Substitute for postal addresses (Japan Post)',
        'Encryption of prescriptions in pharmacies'
    )

    AnswersToRemove[6] = new Array (
        'Barrier-free, with Braille on the keys, for the blind',
        'configured as a remote control for TV and garage to save space',

    )

    AnswersToRemove[7] = new Array (
        '1995',
        '2000'
       

    )

    AnswersToRemove[8] = new Array (
        
        'Bug',
        'Code'

    )

    AnswersToRemove[9] = new Array (
        
        'Program',
        'Code'

    )

    AnswersToRemove[10] = new Array (
        'Property',
        'Program'

    )

    AnswersToRemove[11] = new Array (
        'Function',
        'Loop'

    )

    AnswersToRemove[12] = new Array (
        'Command',
        'Code'

    )

    AnswersToRemove[13] = new Array (
        
        'Variable',
        'Programming'

    )

    AnswersToRemove[14] = new Array (
        'Function',
        'Loop'

    )

    AnswersToRemove[15] = new Array (
        'Program',
        'Sprite'

    )

    AnswersToRemove[16] = new Array (
        'Bill Gates'

    )

    AnswersToRemove[17] = new Array (
        
        '$a_Variable = 9;',
        '$AVariable;'

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






