# University Location Geocoding Project

## Overview
This project processes university location data, modifies university names, removes duplicate records, and fetches geographical coordinates (latitude and longitude) using the **Google Maps API**. The script also handles API rate limits and retries failed requests to ensure accurate data retrieval. Finally, it converts the processed CSV files into Excel format for better data handling.

## Features
- **Preprocesses University Names:** Adds "دانشگاه" to ensure accurate location matching.
- **Detects Duplicate Entries:** Identifies duplicate latitude and longitude records for data cleaning.
- **Fetches Geographical Coordinates:** Uses Google Maps API to retrieve location details.
- **Handles Large Datasets Efficiently:** Processes data in chunks of 100 rows to avoid API rate limits.
- **Retries Failed Requests:** Implements automatic retries for better reliability.
- **Converts Processed Data to Excel Format.**

## Data Privacy & Restrictions
- **Due to privacy concerns, we have only uploaded 10 rows as input and output samples.**
- **Full datasets cannot be shared in this repository.**
- Users must provide their own dataset for complete processing.

## File Structure
```
├── location2coordinate.ipynb   # Jupyter Notebook for geocoding
├── geocoding_script.py         # Python script for geocoding (batch processing)
├── data/
│   ├── sample_input.csv        # Example input data (10 rows)
│   ├── sample_output.csv       # Example output data (10 rows)
├── README.md                   # Project documentation
```

## Requirements
To run this project, ensure you have the following dependencies installed:

### Installation
1. **Create a virtual environment (optional but recommended):**
   ```bash
   python -m venv env
   source env/bin/activate  # On Mac/Linux
   env\Scripts\activate  # On Windows
   ```
2. **Install the required Python packages:**
   ```bash
   pip install pandas requests openpyxl googlemaps
   ```

## Usage
### Running the Processing Script
1. **Modify the input file:** Ensure the input file (`data/sample_input.csv`) contains a column with university names.
2. **Run the script:**
   ```bash
   python geocoding_script.py
   ```
3. **Output Files:**
   - `data/sample_output.csv`: Processed data with latitude, longitude, and additional metadata.
   - `data/sample_output.xlsx`: Excel version of the processed data.
   - `data/duplicate_rows.csv`: Identifies duplicate locations.

## API Key Usage
- The script requires a **Google Maps API Key**.
- Users should replace `api_key` in the script with their own API key.

## Notes
- **Rate Limiting:** The script includes retry mechanisms to avoid exceeding API limits.
- **Error Handling:** Failed requests are logged and retried to ensure smooth processing.
- **Performance Considerations:** Processing is done in **chunks of 100 rows** to handle large datasets efficiently.

## License
This project is licensed under the MIT License.

## Contact
For any questions or improvements, please create an issue or contact the repository owner.

