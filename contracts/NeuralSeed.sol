// SPDX-License-Identifier: MIT
pragma solidity ^0.8.20;

import "@openzeppelin/contracts/token/ERC721/ERC721.sol";
import "@openzeppelin/contracts/access/Ownable.sol";

/**
 * @title Game of Trons: Neural-Seed Core
 * @notice Proof of Concept for Agentic Identity on TRON
 */
contract NeuralSeed is ERC721, Ownable {
    uint256 public nextTokenId;
    
    struct AgentStats {
        uint256 inferenceAlpha; // Intelligence level from Allora
        uint256 totalYieldCaptured;
        uint256 lastConquestTimestamp;
        bool isActive;
    }

    mapping(uint256 => AgentStats) public agentRegistry;
    mapping(address => bool) public authorizedWorkers; // Allora Reputer Nodes

    event ConquestExecuted(uint256 indexed agentId, uint256 yieldAmount, uint256 newAlpha);

    constructor() ERC721("Neural Seed", "GNS") Ownable(msg.sender) {}

    // Only authorized Allora Workers can update Agent Intelligence
    modifier onlyWorker() {
        require(authorizedWorkers[msg.sender], "Not an authorized Allora Worker");
        _;
    }

    function addWorker(address worker) external onlyOwner {
        authorizedWorkers[worker] = true;
    }

    function mintSeed(address to) external onlyOwner {
        uint256 tokenId = nextTokenId++;
        _safeMint(to, tokenId);
        agentRegistry[tokenId] = AgentStats(100, 0, block.timestamp, true); // Base Alpha = 100
    }

    /**
     * @notice Simulates the AI General capturing yield based on ML signals
     * @param tokenId The ID of the Neural Seed
     * @param signalStrength The quality of the inference from Allora
     */
    function recordConquest(uint256 tokenId, uint256 signalStrength, uint256 yieldAmount) 
        external 
        onlyWorker 
    {
        require(agentRegistry[tokenId].isActive, "Agent is dormant");
        
        AgentStats storage agent = agentRegistry[tokenId];
        
        // Logic: Higher signal strength increases the agent's Intelligence (Alpha)
        agent.inferenceAlpha += (signalStrength / 10);
        agent.totalYieldCaptured += yieldAmount;
        agent.lastConquestTimestamp = block.timestamp;

        emit ConquestExecuted(tokenId, yieldAmount, agent.inferenceAlpha);
    }
}
