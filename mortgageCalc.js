function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function calculateMortgage() {
    var homePrice = document.getElementById('homePriceVal').value;
    var downPayment = document.getElementById('downPaymentVal').value;
    var interestRate = document.getElementById('interestVal').value;
    var loanLength = document.getElementById('floatingSelectGrid').value;
    var r = (Number(interestRate)*.01)/12;
    var oR = r + 1;
    var n = Number(loanLength)*12;
    var P = (Number(homePrice) - Number(downPayment));
    var monthlyOutput = Math.round(P*((r*Math.pow(oR,n))/(Math.pow((oR),n)-1)));
    var yearlyOutput = monthlyOutput*n;
    document.getElementById('monthlyResult').innerHTML = '$' + 
    numberWithCommas(monthlyOutput);
    document.getElementById('yearlyResult').innerHTML = '$' + 
    numberWithCommas(yearlyOutput);
}

window.onload = function() {
    calculateMortgage();
}