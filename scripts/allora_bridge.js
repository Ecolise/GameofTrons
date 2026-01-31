/**
 * Game of Trons: AI-to-TRON Inference Bridge
 * Version: 4.1 - With Auto-Logging for Windows 7
 */

const TronWeb = require('tronweb');
const fs = require('fs'); // Added for file saving
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
        {"internalType": "string", "name": "target", "type": "string"},
        {"internalType": "uint256", "name": "yieldAlpha", "type": "uint256"}
    ],
    "name": "recordConquest",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}];

async function fetchAlloraInference() {
    console.log("🧠 [Allora] Calculating yield alpha...");
    return {
        targetName: "SunSwap_Siege_v4", 
        signalStrength: Math.floor(Math.random() * 50) + 50,
        confidence: 0.98
    };
}

async function executeAgentConquest() {
    try {
        const inference = await fetchAlloraInference();
        
        if (inference.confidence > 0.90) {
            console.log("🔥 [Neural-Seed] Initiating Conquest...");

            const contract = await tronWeb.contract(CONTRACT_ABI, CONTRACT_ADDRESS);
            
            const result = await contract.recordConquest(
                inference.targetName, 
                Math.floor(inference.signalStrength) // Ensure it's a whole number
            ).send({
                feeLimit: 100000000,
                callValue: 0,
                shouldPollResponse: false // Helps avoid timeout errors on Win 7
            });
            console.log(`✅ [Success] Hash: ${result}`);

            // --- AUTO-LOGGING BLOCK ---
            const logEntry = `[${new Date().toLocaleString()}] Hash: ${result} | Target: ${inference.targetName}\n`;
            fs.appendFileSync('conquests.txt', logEntry);
            console.log("📂 Result saved to conquests.txt");
            // ---------------------------

        }
    } catch (error) {
        console.error("❌ [Error] Bridge failure:", error.message || error);
    }
}

executeAgentConquest();
