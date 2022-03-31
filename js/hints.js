function ShowHints()
{
    

    let QuestionNumber = document.getElementById('questNum').innerHTML;

    var HintToShow = new Array ( );

    HintToShow[1] = 'Asta la Vista';
    HintToShow[2] = 'Ill be back';
    HintToShow[3] = 'Smile';
    HintToShow[4] = 'Have fun';
    HintToShow[5] = 'Goodbye';

    let currentHint = HintToShow[QuestionNumber];
    //document.write(QuestionNumber);
    //document.write(currentHint);
    document.getElementById('hint').innerHTML = currentHint;
    


}