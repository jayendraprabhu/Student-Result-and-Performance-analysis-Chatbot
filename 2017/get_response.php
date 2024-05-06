<?php
// Set the appropriate environment variable
putenv('OPENAI_API_KEY=sk-JCUvb');

// Import the required classes
use OpenAI\OpenAI;
use OpenAI\DocumentLoaders\CSVLoader;
use OpenAI\Indexes\VectorstoreIndexCreator;
use OpenAI\Chains\RetrievalQA;

// Load the CSV document
$loader = new CSVLoader(["C:\Users\jayen\OneDrive\Desktop\data.csv"]);

// Create the index
$indexCreator = new VectorstoreIndexCreator();
$docsearch = $indexCreator->fromLoaders([$loader]);

// Create the chain
$chain = new RetrievalQA([
    'llm' => new OpenAI(),
    'chain_type' => 'stuff',
    'retriever' => $docsearch->getVectorstore()->asRetriever(),
    'input_key' => 'question'
]);

// Get the user query
$inputData = json_decode(file_get_contents('php://input'), true);
$query = $inputData['message'];

// Pass the query to the chain and get the response
$response = $chain->generate(['question' => $query]);

// Return the response as JSON
echo json_encode(['result' => $response['result']]);