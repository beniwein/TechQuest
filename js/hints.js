function ShowHints() {


    let QuestionNumber = document.getElementById('questNum').innerHTML;

    var HintToShow = new Array();

    HintToShow[1] = 'Asta la Vista';
    HintToShow[2] = 'clean your room!!!';
    HintToShow[3] = 'one year has… weeks +1';
    HintToShow[4] = 'Fine';
    HintToShow[5] = '';
    HintToShow[6] = 'Never brake a Toyota';
    HintToShow[7] = 'AGUA, AGUA';
    HintToShow[8] = '7002¿';
    HintToShow[9] = '😄';
    HintToShow[10] = '';
    HintToShow[11] = 'bugs, not cool';
    HintToShow[12] = 'hackers do this';
    HintToShow[13] = 'Ill be back';
    HintToShow[14] = 'Dont call me back!!';
    HintToShow[15] = '';
    HintToShow[16] = 'party';
    HintToShow[17] = 'have great day';
    HintToShow[18] = 'phone lock';
    HintToShow[19] = 'Audi?';
    HintToShow[20] = '';
    HintToShow[21] = 'have fun ❤️';
    HintToShow[22] = 'not being able to count';
    HintToShow[23] = 'Valorant?';
    HintToShow[24] = 'slowest web browser';
    HintToShow[25] = 'patence is power';
    HintToShow[26] = 'Its gonna be a good night';
    HintToShow[27] = 'believe yourself';
    HintToShow[28] = 'the indestructible phone';
    HintToShow[29] = 'broken things not so good';
    HintToShow[30] = 'Skynet has been destroyed!';


    let currentHint = HintToShow[QuestionNumber];


    //document.write(QuestionNumber);
    //document.write(currentHint);
    document.getElementById('hint').innerHTML = currentHint;




}