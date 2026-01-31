/**
 * Game of Trons: AI-to-TRON Inference Bridge
 * Version: 4.0 - Stable for Windows 7 / Node v13
 */

const TronWeb = require('tronweb');
require('dotenv').config();

// 1. Configuration
const NILE_RPC = "https://api.nileex.io"; 
const CONTRACT_ADDRESS = "TJvbhpvWs2xda6wgoWgig9SivdTtfziVqK"; 
const PRIVATE_KEY = process.env.PRIVATE_KEY_NILE;

const tronWeb = new TronWeb({
    fullHost: NILE_RPC,
    privateKey: PRIVATE_KEY
});

// 2. The "Map" (ABI) - Telling the script how to talk to your contract
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

/**
 * Mock function for Allora Network Inference
 */
async function fetchAlloraInference() {
    console.log("🧠 [Allora] Calculating yield alpha for SunSwap V3...");
    
    // Simulating a successful ML prediction
    return {
        targetName: "SunSwap_Siege_v4", 
        signalStrength: Math.floor(Math.random() * 50) + 50, // Strength 50-100
        confidence: 0.98
    };
}

/**
 * The Main Execution Logic
 */
async function executeAgentConquest() {
    try {
        // Step A: Get AI Data
        const inference = await fetchAlloraInference();
        
        if (inference.confidence > 0.90) {
            console.log(`🔥 [Neural-Seed] High Confidence (${inference.confidence * 100}%). Initiating Conquest...`);

            // Step B: Initialize the Contract Instance
            const contract = await tronWeb.contract(CONTRACT_ABI, CONTRACT_ADDRESS);
            
            console.log("🛰️ System: Broadcasting to TRON Nile...");

            // Step C: Execute the 'recordConquest' function
            // We pass: 1. The target name (String), 2. The signal strength (Number)
            const result = await contract.recordConquest(
                inference.targetName, 
                Math.floor(inference.signalStrength) // Ensure it's a whole number
            ).send({
                feeLimit: 100000000,
                callValue: 0,
                shouldPollResponse: false // Helps avoid timeout errors on Win 7
            });
            console.log("-----------------------------------------");
            console.log(`✅ [Success] Conquest Hash: ${result}`);
            console.log(`📊 [Update] Target: ${inference.targetName}`);
            console.log(`📊 [Update] Alpha: ${inference.signalStrength}`);
            console.log("-----------------------------------------");

        } else {
            console.log("⏳ [Neural-Seed] Confidence too low. Holding position.");
        }
    } catch (error) {
        // Detailed error logging to help us debug
        console.error("❌ [Error] Bridge failure!");
        if (error.message) console.error("Message:", error.message);
        else console.error(error);
    }
}

// 🚀 Launch the process
executeAgentConquest();
