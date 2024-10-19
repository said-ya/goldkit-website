function convertCurrency() {
  const amount = document.getElementById('amount').value;
  const conversionRate = 0.0005; // Условный курс обмена GoldKit на USD
  const result = amount * conversionRate;
  
  document.getElementById('result').innerHTML = `Результат: $${result.toFixed(2)}`;
}
