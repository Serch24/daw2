syntax on

set encoding=utf-8
set tabstop=3 
set expandtab
set smartindent
set nu
set rnu
set nobackup
set nowritebackup
set cmdheight=2
set laststatus=2
set noshowmode
set incsearch
set cursorcolumn
set cursorline
colorscheme desert
""color darkblue 

call plug#begin()
Plug 'preservim/nerdtree'
Plug 'neoclide/coc.nvim', {'branch': 'release'}
Plug 'junegunn/fzf', { 'do': { -> fzf#install()} }
Plug 'preservim/nerdcommenter'
Plug 'itchyny/lightline.vim'
Plug 'mattn/emmet-vim'
Plug 'Yggdroot/indentLine'
call plug#end()

"" indentado de lineas
let g:indentLine_char = 'x'

""pestañas
map <c-t> <esc>:tabnew<cr>                                                      
map <c-e> <esc>:tabnext<cr>                                                     
map <c-w> <esc>:tabclose<cr>                                                    
map <C-n> :NERDTreeToggle<CR>
"" Con esto puedo comentar varias lineas :D
map <C-a> <plug>NERDCommenterMinimal<CR>
nmap <C-f> :FZF<CR>

""esto es para pulsar el tab y que el autocompletado lo llene uwu
inoremap <silent><expr> <TAB>
      \ pumvisible() ? coc#_select_confirm() :
      \ coc#expandableOrJumpable() ? "\<C-r>=coc#rpc#request('doKeymap', ['snippets-expand-jump',''])\<CR>" :
      \ <SID>check_back_space() ? "\<TAB>" :
      \ coc#refresh()

function! s:check_back_space() abort
  let col = col('.') - 1
  return !col || getline('.')[col - 1]  =~# '\s'
endfunction

let g:coc_snippet_next = '<tab>'
