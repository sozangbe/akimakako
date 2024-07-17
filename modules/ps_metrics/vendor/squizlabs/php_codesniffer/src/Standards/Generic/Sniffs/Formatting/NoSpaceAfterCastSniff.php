<?php

/**
 * Ensures there is no space after cast tokens.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/PHPCSStandards/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 *
 * @deprecated 3.4.0 Use the Generic.Formatting.SpaceAfterCast sniff with
 *                   the $spacing property set to 0 instead.
 */
namespace ps_metrics_module_v4_0_5\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting;

use ps_metrics_module_v4_0_5\PHP_CodeSniffer\Files\File;
use ps_metrics_module_v4_0_5\PHP_CodeSniffer\Sniffs\Sniff;
use ps_metrics_module_v4_0_5\PHP_CodeSniffer\Util\Tokens;
class NoSpaceAfterCastSniff implements Sniff
{
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array<int|string>
     */
    public function register()
    {
        return Tokens::$castTokens;
    }
    //end register()
    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The file being scanned.
     * @param int                         $stackPtr  The position of the current token in
     *                                               the stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$stackPtr + 1]['code'] !== \T_WHITESPACE) {
            return;
        }
        $error = 'A cast statement must not be followed by a space';
        $fix = $phpcsFile->addFixableError($error, $stackPtr, 'SpaceFound');
        if ($fix === \true) {
            $phpcsFile->fixer->replaceToken($stackPtr + 1, '');
        }
    }
    //end process()
}
//end class
