const express = require('express');
const fs = require('fs');
const app = express();
const port = 3000;

app.use(express.json());

app.post('/update', (req, res) => {
  const data = `Temperature: ${req.body.temperature}, Humidity: ${req.body.humidity}`;
  
  fs.writeFile('public/data.txt', data, (err) => {
    if (err) {
      console.error('Error writing to file', err);
      res.status(500).send('Internal Server Error');
      return;
    }
    res.send('Data received and saved');
  });
});

app.use(express.static('public'));

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
