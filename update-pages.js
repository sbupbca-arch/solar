
const fs = require('fs');
const path = require('path');

// Read index.html to get the sections
const indexHtml = fs.readFileSync(path.join(__dirname, 'index.html'), 'utf8');

// Extract Featured Products section
const featuredStart = '<!-- Featured Products Slider Start -->';
const featuredEnd = '<!-- Featured Products Slider End -->';
const featuredSection = indexHtml.slice(
  indexHtml.indexOf(featuredStart),
  indexHtml.indexOf(featuredEnd) + featuredEnd.length
);

// Extract Quote section
const quoteStart = '<!-- Quote / Contact Section Start -->';
const quoteEnd = '<!-- Quote / Contact Section End -->';
const quoteSection = indexHtml.slice(
  indexHtml.indexOf(quoteStart),
  indexHtml.indexOf(quoteEnd) + quoteEnd.length
);

// Get all HTML files except index.html
const htmlFiles = fs.readdirSync(__dirname).filter(file => 
  file.endsWith('.html') && file !== 'index.html'
);

htmlFiles.forEach(file => {
  const filePath = path.join(__dirname, file);
  let content = fs.readFileSync(filePath, 'utf8');

  // First, check if the page already has both sections - if so, skip? Or replace?
  // Let's check if it has the quote section - if not, add both before footer!
  const footerStart = '<!-- Footer Start -->';
  
  if (content.includes(footerStart)) {
    // First, remove any existing featured and quote sections to avoid duplicates!
    let updatedContent = content;
    
    // Remove existing featured section if present
    if (updatedContent.includes(featuredStart)) {
      const existingFeaturedStart = updatedContent.indexOf(featuredStart);
      const existingFeaturedEnd = updatedContent.indexOf(featuredEnd) + featuredEnd.length;
      updatedContent = updatedContent.slice(0, existingFeaturedStart) + updatedContent.slice(existingFeaturedEnd);
    }
    
    // Remove existing quote section if present
    if (updatedContent.includes(quoteStart)) {
      const existingQuoteStart = updatedContent.indexOf(quoteStart);
      const existingQuoteEnd = updatedContent.indexOf(quoteEnd) + quoteEnd.length;
      updatedContent = updatedContent.slice(0, existingQuoteStart) + updatedContent.slice(existingQuoteEnd);
    }

    // Now, insert both sections before footer
    const insertPosition = updatedContent.indexOf(footerStart);
    const sectionsToInsert = `
${featuredSection}

${quoteSection}

`;
    updatedContent = updatedContent.slice(0, insertPosition) + sectionsToInsert + updatedContent.slice(insertPosition);
    
    // Write back to file
    fs.writeFileSync(filePath, updatedContent, 'utf8');
    console.log(`Updated ${file}`);
  } else {
    console.log(`Skipped ${file} - no footer found`);
  }
});

console.log('Done updating all pages!');
