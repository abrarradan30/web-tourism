// src/utils/supabase.js
import { createClient } from '@supabase/supabase-js'

const supabaseUrl = 'https://iqljowulgiptgstzjqot.supabase.co'
const supabaseKey =
  'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImlxbGpvd3VsZ2lwdGdzdHpqcW90Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NDU5MDk4ODksImV4cCI6MjA2MTQ4NTg4OX0.vw4EsH5quTezlY4tDB0LPf3TQnTQbfmWLAtEbxAWKas'

export const supabase = createClient(supabaseUrl, supabaseKey)
