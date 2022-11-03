document.addEventListener('DOMContentLoaded', function () {
  createLine(dados(20), labels(20), poupanca(20));
});
document.querySelector('input[type=number]').addEventListener('keyup', function () {
  var timer = null;
  var numb = document.querySelector('input[type=number]').value;
  if (timer !== null) {
    clearTimeout(timer);
  }
  timer = setTimeout(function () {
    createLine(dados(numb), labels(numb), poupanca(numb));
  }, 3000);
});

var dados = function (number) {
  var dados = [];
  for (var i = 0; i <= number; i++) {
    dados.push(parseFloat((Math.random() * (10000 - 10) + 10).toFixed(2)));
  }
  return dados;
};

var poupanca = function (number) {
  var poupanca = [];
  for (var i = 0; i <= number; i++) {
    poupanca.push(parseFloat((Math.random() * (10000 - 10) + 10).toFixed(2)));
  }
  return poupanca;
};

var labels = function (number) {
  var labels = [];
  for (var i = 0; i <= number; i++) {
    labels.push(parseFloat(i));
  }
  return labels;
};

var createLine = function (callbackData, callbackLabels, callbackPoupanca) {
  Highcharts.chart('graphics-robo', {
    chart: {
      height: 300,
      type: 'line' },

    line: {
      marker: {
        enabled: false } },


    credits: {
      enabled: false },

    tooltip: {
      shared: true,
      crosshairs: [true],
      useHTML: true,
      backgroundColor: '#ffffff',
      headerFormat: '<span style="background-color:#ededed;display:block;padding:5px;margin:0 0 5px 0;font-size:1em;color:#7f7c75;font-weight:600;text-align:center">Daqui {point.key} meses</span>',
      valuePrefix: 'R$ ',
      pointFormatter: function () {
        return `<table style="margin-bottom: 5px;"><tr><th style="color: ${this.series.color};font-size:1em;padding:3px;font-weight:bold;">${this.series.name}</th><td style="text-align: right"><span style="color:#20c49d;font-weight:bolder;text-rendering:auto;font-size:1em;">R$ ${parseFloat(this.y.toFixed(2)).toLocaleString('pt-BR', function () {
          minimumFractionDigits: 2;
        })}</span></td></tr></table>`;
      },
      padding: 0,
      borderWidth: 0 },

    title: {
      text: 'Aqui está o seu plano de investimento' },

    xAxis: {
      categories: callbackLabels,
      gridLineWidth: 0,
      crosshair: {
        width: 1,
        color: 'gray' },

      series: {
        dataLabels: {
          enabled: false } } },



    yAxis: {
      gridLineWidth: 0,
      title: {
        text: null } },


    plotOptions: {
      series: {
        showInLegend: false,
        animation: {
          duration: 3000 },

        lineWidth: 3,
        cursor: 'pointer' } },


    series: [{
      data: callbackData,
      name: 'Investimento',
      marker: {
        radius: 0 } },

    {
      data: callbackPoupanca,
      name: 'Poupança',
      color: 'gray',
      marker: {
        symbol: 'circle',
        radius: 0 },

      dataLabels: {} }] });




};