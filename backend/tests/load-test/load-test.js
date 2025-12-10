import axios from 'axios';

// const totalRequests = 50;   // Total de requests que quieres hacer
// const concurrency = 5;      // Requests simultáneos
const totalRequests = 200;   // Total de requests que quieres hacer
const concurrency = 20;      // Requests simultáneos

async function runBatch(batchNumber, batchSize) {
  await Promise.all(
    Array.from({ length: batchSize }, async (_, i) => {
      try {
        // const res = await axios.get('https://api.jetgo.mobi/api/test-firebase');
        // const res = await axios.get('http://api.jetgo.local:8080/api/test-firebase');
        const res = await axios.get('http://api.jetgo.local:8080/api/test-socketio');
        console.log(`Batch ${batchNumber} - Request ${i+1}: ${res.status}`);
      } catch (err) {
        console.error(`Batch ${batchNumber} - Request ${i+1} ERROR: ${err.message}`);
      }
    })
  );
}

async function main() {
  const batches = Math.ceil(totalRequests / concurrency);

  for (let i = 0; i < batches; i++) {
    console.log(`Running batch ${i+1}/${batches}`);
    await runBatch(i+1, concurrency);
  }

  console.log('Load test finished');
}

main();
