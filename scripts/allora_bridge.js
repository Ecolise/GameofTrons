const TronWeb = require('tronweb');
const fs = require('fs');
require('dotenv').config();

const NILE_RPC = "https://api.nileex.io"; 
const CONTRACT_ADDRESS = "TJvbhpvWs2xda6wgoWgig9SivdTtfziVqK"; 
const PRIVATE_KEY = process.env.PRIVATE_KEY_NILE;

const tronWeb = new TronWeb({
    fullHost: NILE_RPC,
    privateKey: PRIVATE_KEY
});

const CONTRACT_ABI = [{
    "inputs": [
        {"internalType": "uint256", "name": "tokenId", "type": "uint256"},
        {"internalType": "uint256", "name": "signalStrength", "type": "uint256"},
        {"internalType": "uint256", "name": "yieldAmount", "type": "uint256"}
    ],
    "name": "recordConquest",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}];

async function runBridge() {
    try {
        const contract = await tronWeb.contract(CONTRACT_ABI, CONTRACT_ADDRESS);
        const myAddress = tronWeb.address.fromPrivateKey(PRIVATE_KEY);

        console.log("🧠 [Allora] Calculating yield alpha...");
        const signal = Math.floor(Math.random() * 50) + 50;
        const yieldAmt = 1000000; // 1 TRX in SUN

        console.log(`🔥 [Neural-Seed] Sending Signal to New Token ...`);

        // Execute the call with 3 parameters to match your Solidity
        const result = await contract.recordConquest(
            1,         // Token ID
            signal,    // Signal Strength
            yieldAmt   // Yield Amount
        ).send({
            feeLimit: 100000000 // 100 TRX Energy Limit
        });

        const logEntry = `[${new Date().toLocaleString()}] SUCCESS! Signal: ${signal} | Hash: ${result}\n`;
        fs.appendFileSync('conquests.txt', logEntry);
        console.log("✅ Conquest recorded successfully!");

    } catch (error) {
        console.error("❌ Bridge Error:", error.message || error);
        console.log("💡 Tip: Ensure you have added your address as a Worker via TronScan first.");
    }
}

runBridge();
